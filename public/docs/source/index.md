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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "incidunt",
            "plus_minus": -1097,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "possimus",
            "plus_minus": 2378,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "id",
            "plus_minus": -1766,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "culpa",
            "plus_minus": -1842,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "doloremque",
            "plus_minus": -898,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
    -d '{"name":"sIWgOa8tIsZbY5Dc","plus_minus":14}'

```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "sIWgOa8tIsZbY5Dc",
    "plus_minus": 14
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "attributename0JwSl",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-23 05:32:11.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:11.000000",
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
            "attribute": "YIBcaif8NOsJAeOB",
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "id",
        "plus_minus": -1766,
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:39.000000",
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
    -d '{"name":"UbbmwwVG9703HIdz","plus_minus":3}'

```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "QKMy6iLtKOFZ2zyp",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "UbbmwwVG9703HIdz",
    "plus_minus": 3
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "updatebHTrR",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:11.000000",
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
            "attribute": "DPEMZAqTqSaS2xfc",
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
    -d '{"email":"R14UyUYghW2Ty0Om","username":"y5yMCeow3wnAdJSh","password":"zFqscruDueIrYCXU"}'

```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "R14UyUYghW2Ty0Om",
    "username": "y5yMCeow3wnAdJSh",
    "password": "zFqscruDueIrYCXU"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTA4OTk5MzIsImV4cCI6MTU1MDkwMzUzMiwibmJmIjoxNTUwODk5OTMyLCJqdGkiOiJBbG5jUTQ4M1hPTWhLUGV6Iiwic3ViIjo1MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.8aZT8Bbv8ugXZVZnvJdxpqwbZcBSt_K6Cjei6fqhBcI",
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
    -d '{"email":"i4RgPsxOStcAgKG4","password":"6zPVmlfJUzYQcQIf"}'

```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "i4RgPsxOStcAgKG4",
    "password": "6zPVmlfJUzYQcQIf"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTA4OTk5NDMsImV4cCI6MTU1MDkwMzU0MywibmJmIjoxNTUwODk5OTQzLCJqdGkiOiJKeW40UE5XWGpaWUxPcVk2Iiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.iDiHHvjjuk-qkmWoRTvSXqkc1IPcpAhWg5Cp9r8nUQc",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MDg5OTkzMiwiZXhwIjoxNTUwOTAzNTMyLCJuYmYiOjE1NTA4OTk5MzIsImp0aSI6InU5WEFBSVFrZTN1ZTZlRmMiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.L9mVNjGn9tYIEtdZ0BZW_83WMCaLmh8-AUV1FFrLlfI",
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
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:58.000000",
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
    -d '{"email":"vYnU10Akw3S1cryN","password":"OU1UJ6v0iM73jbk1"}'

```

```javascript
const url = new URL("http://localhost/api/admin/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "vYnU10Akw3S1cryN",
    "password": "OU1UJ6v0iM73jbk1"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTA4OTk5NDMsImV4cCI6MTU1MDkwMzU0MywibmJmIjoxNTUwODk5OTQzLCJqdGkiOiJKeW40UE5XWGpaWUxPcVk2Iiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.iDiHHvjjuk-qkmWoRTvSXqkc1IPcpAhWg5Cp9r8nUQc",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "MVaTINF",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "reprehenderit",
                "users": [
                    {
                        "id": 8,
                        "unique_id": "1kSTW2ZwRR",
                        "name": null,
                        "username": "青山 あすか",
                        "email": "tanaka.nanami@example.org",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-23 05:31:39.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-23 05:31:39.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 17,
                        "unique_id": "mEwpAVRit1",
                        "name": null,
                        "username": "村山 太郎",
                        "email": "matsumoto.kana@example.net",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-23 05:31:39.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-23 05:31:39.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 24,
                        "unique_id": "G5Q5ToGH7q",
                        "name": null,
                        "username": "山田 康弘",
                        "email": "tsubasa.ito@example.com",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-23 05:31:39.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-23 05:31:39.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    }
                ],
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
    -d '{"name":"jAjAcdffgCNttB4I","current_location_flag":true,"latitude":"kzjtlNJhCJBBRjoe","longitude":"Ks7n4Uk8GUsbZY9U","timer":6,"group_id":8}'

```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "jAjAcdffgCNttB4I",
    "current_location_flag": true,
    "latitude": "kzjtlNJhCJBBRjoe",
    "longitude": "Ks7n4Uk8GUsbZY9U",
    "timer": 6,
    "group_id": 8
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "2AVDVG",
        "current_location_flag": null,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "animi",
            "users": [
                {
                    "id": 14,
                    "unique_id": "lHrhnPvyBl",
                    "name": null,
                    "username": "宇野 千代",
                    "email": "cmiyazawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "mEwpAVRit1",
                    "name": null,
                    "username": "村山 太郎",
                    "email": "matsumoto.kana@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "o030UInCDC",
                    "name": null,
                    "username": "山本 明美",
                    "email": "sayuri.sato@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-23 05:32:13.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:13.000000",
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
            "default_setting": "vFd5O2ekNP4XrLGp",
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "MVaTINF",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "reprehenderit",
            "users": [
                {
                    "id": 8,
                    "unique_id": "1kSTW2ZwRR",
                    "name": null,
                    "username": "青山 あすか",
                    "email": "tanaka.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "mEwpAVRit1",
                    "name": null,
                    "username": "村山 太郎",
                    "email": "matsumoto.kana@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "G5Q5ToGH7q",
                    "name": null,
                    "username": "山田 康弘",
                    "email": "tsubasa.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:39.000000",
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
    -d '{"name":"rPFQPluxZgxS759X","current_location_flag":false,"latitude":"l6GBMu4F8DYjasVX","longitude":"fSdRg2CI8WhxeEAi","timer":17,"group_id":8}'

```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "Gw5DPWl6zem2aptr",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "rPFQPluxZgxS759X",
    "current_location_flag": false,
    "latitude": "l6GBMu4F8DYjasVX",
    "longitude": "fSdRg2CI8WhxeEAi",
    "timer": 17,
    "group_id": 8
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newSettingszRJD63tV",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nobis",
            "users": [
                {
                    "id": 8,
                    "unique_id": "1kSTW2ZwRR",
                    "name": null,
                    "username": "青山 あすか",
                    "email": "tanaka.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "G5Q5ToGH7q",
                    "name": null,
                    "username": "山田 康弘",
                    "email": "tsubasa.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "tXjpTOhAt0",
                    "name": null,
                    "username": "大垣 明美",
                    "email": "jun.nakatsugawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-23 05:32:13.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:13.000000",
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
            "default_setting": "C5XJ917ltrNOJzjA",
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
            "id": 2,
            "unique_id": "1XeXYdbvNI",
            "name": null,
            "username": "原田 七夏",
            "email": "miki99@example.net",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 8,
            "unique_id": "1kSTW2ZwRR",
            "name": null,
            "username": "青山 あすか",
            "email": "tanaka.nanami@example.org",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updatebHTrR",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:32:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "lHrhnPvyBl",
            "name": null,
            "username": "宇野 千代",
            "email": "cmiyazawa@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "mEwpAVRit1",
            "name": null,
            "username": "村山 太郎",
            "email": "matsumoto.kana@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "G5Q5ToGH7q",
            "name": null,
            "username": "山田 康弘",
            "email": "tsubasa.ito@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "incidunt",
                "plus_minus": -1097,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "tXjpTOhAt0",
            "name": null,
            "username": "大垣 明美",
            "email": "jun.nakatsugawa@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "Vcr21bw8lG",
            "name": null,
            "username": "若松 亮介",
            "email": "aota.youichi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "lXnWrGE1ZU",
            "name": null,
            "username": "笹田 直子",
            "email": "shuhei.nomura@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "o030UInCDC",
            "name": null,
            "username": "山本 明美",
            "email": "sayuri.sato@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "incidunt",
                "plus_minus": -1097,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
    -d '{"email":"vcbZ6X0YsUrw474m"}'

```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "vcbZ6X0YsUrw474m"
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
        "date": "2019-02-23 05:31:39.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-23 05:31:58.000000",
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
            "id": 2,
            "unique_id": "1XeXYdbvNI",
            "name": null,
            "username": "原田 七夏",
            "email": "miki99@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 10,
                "manager": {
                    "id": 2,
                    "unique_id": "1XeXYdbvNI",
                    "name": null,
                    "username": "原田 七夏",
                    "email": "miki99@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ipsum",
                "plus_minus": 1450,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "vTqBX46jwh",
            "name": null,
            "username": "加藤 陽子",
            "email": "aekoda@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 26,
                "manager": {
                    "id": 6,
                    "unique_id": "vTqBX46jwh",
                    "name": null,
                    "username": "加藤 陽子",
                    "email": "aekoda@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "eos",
                "plus_minus": 259,
                "created_at": {
                    "date": "2019-02-23 05:31:41.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:41.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 7,
            "unique_id": "SQ1Q81i4Su",
            "name": null,
            "username": "松本 英樹",
            "email": "ikimura@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 31,
                "manager": {
                    "id": 7,
                    "unique_id": "SQ1Q81i4Su",
                    "name": null,
                    "username": "松本 英樹",
                    "email": "ikimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 45,
                "created_at": {
                    "date": "2019-02-23 05:31:41.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:41.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "iImEkkXRYt",
            "name": null,
            "username": "笹田 英樹",
            "email": "miki.miyake@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 60,
                "manager": {
                    "id": 12,
                    "unique_id": "iImEkkXRYt",
                    "name": null,
                    "username": "笹田 英樹",
                    "email": "miki.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolor",
                "plus_minus": -873,
                "created_at": {
                    "date": "2019-02-23 05:31:43.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:43.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "XPn78USYq0",
            "name": null,
            "username": "坂本 翔太",
            "email": "pkiriyama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 89,
                "manager": {
                    "id": 18,
                    "unique_id": "XPn78USYq0",
                    "name": null,
                    "username": "坂本 翔太",
                    "email": "pkiriyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "qui",
                "plus_minus": 1950,
                "created_at": {
                    "date": "2019-02-23 05:31:46.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:46.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "n1LARs01Vj",
            "name": null,
            "username": "佐々木 直子",
            "email": "asuka.tanabe@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 92,
                "manager": {
                    "id": 19,
                    "unique_id": "n1LARs01Vj",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "asuka.tanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "qui",
                "plus_minus": -2035,
                "created_at": {
                    "date": "2019-02-23 05:31:46.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:46.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "EDmEC5Ch5a",
            "name": null,
            "username": "廣川 七夏",
            "email": "saito.shuhei@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 121,
                "manager": {
                    "id": 25,
                    "unique_id": "EDmEC5Ch5a",
                    "name": null,
                    "username": "廣川 七夏",
                    "email": "saito.shuhei@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": -2568,
                "created_at": {
                    "date": "2019-02-23 05:31:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "A51FGy3Lhw",
            "name": null,
            "username": "藤本 裕美子",
            "email": "momoko.hirokawa@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 191,
                "manager": {
                    "id": 39,
                    "unique_id": "A51FGy3Lhw",
                    "name": null,
                    "username": "藤本 裕美子",
                    "email": "momoko.hirokawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "rerum",
                "plus_minus": -663,
                "created_at": {
                    "date": "2019-02-23 05:31:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "XwqlO3yfh1",
            "name": null,
            "username": "桐山 さゆり",
            "email": "takuma.tanabe@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 227,
                "manager": {
                    "id": 46,
                    "unique_id": "XwqlO3yfh1",
                    "name": null,
                    "username": "桐山 さゆり",
                    "email": "takuma.tanabe@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "temporibus",
                "plus_minus": -188,
                "created_at": {
                    "date": "2019-02-23 05:31:56.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:56.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "PWFTIO1DMW",
            "name": null,
            "username": "浜田 翔太",
            "email": "pkoizumi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 232,
                "manager": {
                    "id": 47,
                    "unique_id": "PWFTIO1DMW",
                    "name": null,
                    "username": "浜田 翔太",
                    "email": "pkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "omnis",
                "plus_minus": -655,
                "created_at": {
                    "date": "2019-02-23 05:31:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
            "unique_id": "kvMJRGTxQ0",
            "name": null,
            "username": "山岸 千代",
            "email": "rika.kanou@example.net",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "jSN48amGa5",
            "name": null,
            "username": "伊藤 直樹",
            "email": "kobayashi.asuka@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "n1LARs01Vj",
            "name": null,
            "username": "佐々木 直子",
            "email": "asuka.tanabe@example.net",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "IPbhIk1JWe",
            "name": null,
            "username": "笹田 陽一",
            "email": "hanako.kondo@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "YDl4jHSEz6",
            "name": null,
            "username": "井高 修平",
            "email": "taichi28@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "A51FGy3Lhw",
            "name": null,
            "username": "藤本 裕美子",
            "email": "momoko.hirokawa@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "83INqqX1ad",
            "name": null,
            "username": "三宅 千代",
            "email": "naoki.hamada@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "incidunt",
                "plus_minus": -1097,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
            "id": 4,
            "unique_id": "wxTwIFHqqk",
            "name": null,
            "username": "小泉 直人",
            "email": "lkanou@example.net",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updatebHTrR",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:32:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "unique_id": "wG1unylGLf",
            "name": null,
            "username": "木村 零",
            "email": "tomoya.ogaki@example.org",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 7,
            "unique_id": "SQ1Q81i4Su",
            "name": null,
            "username": "松本 英樹",
            "email": "ikimura@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "zo8KkW7ED3",
            "name": null,
            "username": "宇野 知実",
            "email": "hanako22@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "XPn78USYq0",
            "name": null,
            "username": "坂本 翔太",
            "email": "pkiriyama@example.net",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "7sjgzVggVt",
            "name": null,
            "username": "小林 直樹",
            "email": "ktanabe@example.org",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "updatebHTrR",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:32:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "XdNlTaIVs5",
            "name": null,
            "username": "吉田 知実",
            "email": "mai.sasaki@example.net",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "KUlGoeAEnt",
            "name": null,
            "username": "江古田 翼",
            "email": "aota.jun@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "culpa",
                "plus_minus": -1842,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "DJvn0GVL8k",
            "name": null,
            "username": "三宅 陽一",
            "email": "fujimoto.mikako@example.org",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "unique_id": "AEhh789CxS",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:32:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:32:14.000000",
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
            "id": 5,
            "unique_id": "wG1unylGLf",
            "name": null,
            "username": "木村 零",
            "email": "tomoya.ogaki@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 22,
                "manager": {
                    "id": 5,
                    "unique_id": "wG1unylGLf",
                    "name": null,
                    "username": "木村 零",
                    "email": "tomoya.ogaki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "incidunt",
                "plus_minus": -548,
                "created_at": {
                    "date": "2019-02-23 05:31:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "ypsVDlQxhR",
            "name": null,
            "username": "三宅 加奈",
            "email": "pkondo@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 50,
                "manager": {
                    "id": 10,
                    "unique_id": "ypsVDlQxhR",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "pkondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "repellat",
                "plus_minus": -582,
                "created_at": {
                    "date": "2019-02-23 05:31:43.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:43.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "lHrhnPvyBl",
            "name": null,
            "username": "宇野 千代",
            "email": "cmiyazawa@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 70,
                "manager": {
                    "id": 14,
                    "unique_id": "lHrhnPvyBl",
                    "name": null,
                    "username": "宇野 千代",
                    "email": "cmiyazawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "tempore",
                "plus_minus": 792,
                "created_at": {
                    "date": "2019-02-23 05:31:44.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:44.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "YDl4jHSEz6",
            "name": null,
            "username": "井高 修平",
            "email": "taichi28@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 110,
                "manager": {
                    "id": 22,
                    "unique_id": "YDl4jHSEz6",
                    "name": null,
                    "username": "井高 修平",
                    "email": "taichi28@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "suscipit",
                "plus_minus": -2234,
                "created_at": {
                    "date": "2019-02-23 05:31:47.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:47.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "kxndqF7FqW",
            "name": null,
            "username": "西之園 くみ子",
            "email": "kana94@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 198,
                "manager": {
                    "id": 40,
                    "unique_id": "kxndqF7FqW",
                    "name": null,
                    "username": "西之園 くみ子",
                    "email": "kana94@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quos",
                "plus_minus": 1178,
                "created_at": {
                    "date": "2019-02-23 05:31:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "it7HokFB5d",
            "name": null,
            "username": "大垣 陽子",
            "email": "shuhei97@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 215,
                "manager": {
                    "id": 43,
                    "unique_id": "it7HokFB5d",
                    "name": null,
                    "username": "大垣 陽子",
                    "email": "shuhei97@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "mollitia",
                "plus_minus": 115,
                "created_at": {
                    "date": "2019-02-23 05:31:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "gclbqn3g4t",
            "name": null,
            "username": "笹田 真綾",
            "email": "maaya.ogaki@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 243,
                "manager": {
                    "id": 49,
                    "unique_id": "gclbqn3g4t",
                    "name": null,
                    "username": "笹田 真綾",
                    "email": "maaya.ogaki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "praesentium",
                "plus_minus": 2053,
                "created_at": {
                    "date": "2019-02-23 05:31:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
            "id": 3,
            "unique_id": "JtbV4iROtE",
            "name": null,
            "username": "木村 裕美子",
            "email": "itanaka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 13,
                "manager": {
                    "id": 3,
                    "unique_id": "JtbV4iROtE",
                    "name": null,
                    "username": "木村 裕美子",
                    "email": "itanaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "culpa",
                "plus_minus": -1825,
                "created_at": {
                    "date": "2019-02-23 05:31:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "G5Q5ToGH7q",
            "name": null,
            "username": "山田 康弘",
            "email": "tsubasa.ito@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 117,
                "manager": {
                    "id": 24,
                    "unique_id": "G5Q5ToGH7q",
                    "name": null,
                    "username": "山田 康弘",
                    "email": "tsubasa.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aliquid",
                "plus_minus": 1784,
                "created_at": {
                    "date": "2019-02-23 05:31:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:48.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "glMTPv0R4x",
            "name": null,
            "username": "桐山 くみ子",
            "email": "kana47@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 129,
                "manager": {
                    "id": 26,
                    "unique_id": "glMTPv0R4x",
                    "name": null,
                    "username": "桐山 くみ子",
                    "email": "kana47@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "accusamus",
                "plus_minus": -407,
                "created_at": {
                    "date": "2019-02-23 05:31:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:49.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "lXnWrGE1ZU",
            "name": null,
            "username": "笹田 直子",
            "email": "shuhei.nomura@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 152,
                "manager": {
                    "id": 31,
                    "unique_id": "lXnWrGE1ZU",
                    "name": null,
                    "username": "笹田 直子",
                    "email": "shuhei.nomura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nisi",
                "plus_minus": 1758,
                "created_at": {
                    "date": "2019-02-23 05:31:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "XdNlTaIVs5",
            "name": null,
            "username": "吉田 知実",
            "email": "mai.sasaki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 181,
                "manager": {
                    "id": 37,
                    "unique_id": "XdNlTaIVs5",
                    "name": null,
                    "username": "吉田 知実",
                    "email": "mai.sasaki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptas",
                "plus_minus": -1092,
                "created_at": {
                    "date": "2019-02-23 05:31:53.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:53.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
    -d '{"user_id":16}'

```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 16
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
    -d '{"user_id":20}'

```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 20
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
    -d '{"attribute_id":6}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "L09Juvn4R7b9gAKG",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 6
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
            "friend": "tP5cLs389WRBSqdR",
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
            "friend": "TQPoBdbJzX7bBnDO",
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
            "friend": "sgfpXcMuCFPNWrk7",
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
            "friend": "RYUIHHGltVa00H3Y",
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
            "friend": "Tq6eMXyEJl6QrRxy",
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
        "unique_id": "1XeXYdbvNI",
        "name": null,
        "username": "原田 七夏",
        "email": "miki99@example.net",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "id",
            "plus_minus": -1766,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:39.000000",
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
            "friend": "1f840QfxGAx1LW81",
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
    -d '{"device_token":"JgJQtToxoGMeMH7L"}'

```

```javascript
const url = new URL("http://localhost/api/device_token");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "device_token": "JgJQtToxoGMeMH7L"
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "device_token": "newTokengsWhBI0ksY27gd4C4rKc",
        "created_at": {
            "date": "2019-02-23 05:32:10.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:10.000000",
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
            "group": "I68F9V3ihX48LOtt",
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
            "unique_id": "1XeXYdbvNI",
            "name": null,
            "username": "原田 七夏",
            "email": "miki99@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "G5Q5ToGH7q",
            "name": null,
            "username": "山田 康弘",
            "email": "tsubasa.ito@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "lXnWrGE1ZU",
            "name": null,
            "username": "笹田 直子",
            "email": "shuhei.nomura@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
            "group": "pJmzLlMfEhDY96GN",
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
            "group": "HNLpzlkDzTVPUCwj",
            "user": "SMEUXTblvjuOZx1g",
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
        "id": 24,
        "unique_id": "G5Q5ToGH7q",
        "name": null,
        "username": "山田 康弘",
        "email": "tsubasa.ito@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:39.000000",
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
            "group": "gIdN4Y0HoCmka6q0",
            "user": "4ARQrw7Lmb3d8gHL",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "reprehenderit",
            "users": [
                {
                    "id": 8,
                    "unique_id": "1kSTW2ZwRR",
                    "name": null,
                    "username": "青山 あすか",
                    "email": "tanaka.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "mEwpAVRit1",
                    "name": null,
                    "username": "村山 太郎",
                    "email": "matsumoto.kana@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "G5Q5ToGH7q",
                    "name": null,
                    "username": "山田 康弘",
                    "email": "tsubasa.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "est",
            "users": [
                {
                    "id": 2,
                    "unique_id": "1XeXYdbvNI",
                    "name": null,
                    "username": "原田 七夏",
                    "email": "miki99@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "G5Q5ToGH7q",
                    "name": null,
                    "username": "山田 康弘",
                    "email": "tsubasa.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "lXnWrGE1ZU",
                    "name": null,
                    "username": "笹田 直子",
                    "email": "shuhei.nomura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nobis",
            "users": [
                {
                    "id": 8,
                    "unique_id": "1kSTW2ZwRR",
                    "name": null,
                    "username": "青山 あすか",
                    "email": "tanaka.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "G5Q5ToGH7q",
                    "name": null,
                    "username": "山田 康弘",
                    "email": "tsubasa.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "tXjpTOhAt0",
                    "name": null,
                    "username": "大垣 明美",
                    "email": "jun.nakatsugawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "animi",
            "users": [
                {
                    "id": 17,
                    "unique_id": "mEwpAVRit1",
                    "name": null,
                    "username": "村山 太郎",
                    "email": "matsumoto.kana@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "o030UInCDC",
                    "name": null,
                    "username": "山本 明美",
                    "email": "sayuri.sato@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "explicabo",
            "users": [
                {
                    "id": 2,
                    "unique_id": "1XeXYdbvNI",
                    "name": null,
                    "username": "原田 七夏",
                    "email": "miki99@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "G5Q5ToGH7q",
                    "name": null,
                    "username": "山田 康弘",
                    "email": "tsubasa.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "tXjpTOhAt0",
                    "name": null,
                    "username": "大垣 明美",
                    "email": "jun.nakatsugawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
    -d '{"name":"XhImlbJnobKtEGh5"}'

```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "XhImlbJnobKtEGh5"
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "animi",
        "users": [],
        "created_at": {
            "date": "2019-02-23 05:32:20.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:20.000000",
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
            "group": "fr199clYsaspIWLC",
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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newGroupfIoYl",
        "users": [],
        "created_at": {
            "date": "2019-02-23 05:32:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:19.000000",
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
    -d '{"name":"r5jgSm3rDc8DT5Ru"}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "gcYKc83VBDTBk96Z",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "r5jgSm3rDc8DT5Ru"
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newGroup9horPTH0",
        "users": [
            {
                "id": 2,
                "unique_id": "1XeXYdbvNI",
                "name": null,
                "username": "原田 七夏",
                "email": "miki99@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 24,
                "unique_id": "G5Q5ToGH7q",
                "name": null,
                "username": "山田 康弘",
                "email": "tsubasa.ito@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 31,
                "unique_id": "lXnWrGE1ZU",
                "name": null,
                "username": "笹田 直子",
                "email": "shuhei.nomura@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:20.000000",
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
            "group": "6FFbalNHu2wiDOjK",
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
            "group": "iSk9IP2RUzevJnaI",
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
            "unique_id": "1XeXYdbvNI",
            "name": null,
            "username": "原田 七夏",
            "email": "miki99@example.net",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "tXjpTOhAt0",
            "name": null,
            "username": "大垣 明美",
            "email": "jun.nakatsugawa@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "Vcr21bw8lG",
            "name": null,
            "username": "若松 亮介",
            "email": "aota.youichi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "lXnWrGE1ZU",
            "name": null,
            "username": "笹田 直子",
            "email": "shuhei.nomura@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "o030UInCDC",
            "name": null,
            "username": "山本 明美",
            "email": "sayuri.sato@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "incidunt",
                "plus_minus": -1097,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "J2PKHapGx1",
            "name": null,
            "username": "aaaa",
            "email": "NPTRK@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:32:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:32:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "vTqBX46jwh",
            "name": null,
            "username": "加藤 陽子",
            "email": "aekoda@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
            "id": 17,
            "name": "voluptate",
            "shop_id": "J000449898",
            "budget": 2980,
            "actual": 33598,
            "start_time": "2019-02-18 05:31:41",
            "end_time": "2019-03-05 05:31:41",
            "manager": {
                "id": 5,
                "unique_id": "wG1unylGLf",
                "name": null,
                "username": "木村 零",
                "email": "tomoya.ogaki@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "JtbV4iROtE",
                    "name": null,
                    "username": "木村 裕美子",
                    "email": "itanaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "9gYilQ00yn",
                    "name": null,
                    "username": "吉本 美加子",
                    "email": "fsaito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "A51FGy3Lhw",
                    "name": null,
                    "username": "藤本 裕美子",
                    "email": "momoko.hirokawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "name": "dolore",
            "shop_id": "J001178400",
            "budget": 12475,
            "actual": 11876,
            "start_time": "2019-02-18 05:31:41",
            "end_time": null,
            "manager": {
                "id": 5,
                "unique_id": "wG1unylGLf",
                "name": null,
                "username": "木村 零",
                "email": "tomoya.ogaki@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "XPn78USYq0",
                    "name": null,
                    "username": "坂本 翔太",
                    "email": "pkiriyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "n1LARs01Vj",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "asuka.tanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "DJvn0GVL8k",
                    "name": null,
                    "username": "三宅 陽一",
                    "email": "fujimoto.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "name": "nihil",
            "shop_id": "J001178400",
            "budget": 12551,
            "actual": 33260,
            "start_time": "2019-02-18 05:31:43",
            "end_time": null,
            "manager": {
                "id": 10,
                "unique_id": "ypsVDlQxhR",
                "name": null,
                "username": "三宅 加奈",
                "email": "pkondo@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "kvMJRGTxQ0",
                    "name": null,
                    "username": "山岸 千代",
                    "email": "rika.kanou@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "IPbhIk1JWe",
                    "name": null,
                    "username": "笹田 陽一",
                    "email": "hanako.kondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "glMTPv0R4x",
                    "name": null,
                    "username": "桐山 くみ子",
                    "email": "kana47@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "kBLP4owrwb",
                    "name": null,
                    "username": "笹田 あすか",
                    "email": "ekoda.akemi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "tXjpTOhAt0",
                    "name": null,
                    "username": "大垣 明美",
                    "email": "jun.nakatsugawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "name": "est",
            "shop_id": "J001125885",
            "budget": 14098,
            "actual": 6694,
            "start_time": "2019-02-18 05:31:43",
            "end_time": null,
            "manager": {
                "id": 10,
                "unique_id": "ypsVDlQxhR",
                "name": null,
                "username": "三宅 加奈",
                "email": "pkondo@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "n1LARs01Vj",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "asuka.tanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "YDl4jHSEz6",
                    "name": null,
                    "username": "井高 修平",
                    "email": "taichi28@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "yj1wXhN32U",
                    "name": null,
                    "username": "渡辺 七夏",
                    "email": "yui.hamada@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "glMTPv0R4x",
                    "name": null,
                    "username": "桐山 くみ子",
                    "email": "kana47@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "gclbqn3g4t",
                    "name": null,
                    "username": "笹田 真綾",
                    "email": "maaya.ogaki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "name": "totam",
            "shop_id": "J001182216",
            "budget": 18222,
            "actual": 37906,
            "start_time": "2019-02-18 05:31:44",
            "end_time": null,
            "manager": {
                "id": 14,
                "unique_id": "lHrhnPvyBl",
                "name": null,
                "username": "宇野 千代",
                "email": "cmiyazawa@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "IPbhIk1JWe",
                    "name": null,
                    "username": "笹田 陽一",
                    "email": "hanako.kondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Ygl2yhHo3e",
                    "name": null,
                    "username": "廣川 明美",
                    "email": "nomura.haruka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "tpnW5WIFTn",
                    "name": null,
                    "username": "渡辺 幹",
                    "email": "atsushi83@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "name": "aliquam",
            "shop_id": "J001006387",
            "budget": 17290,
            "actual": 5809,
            "start_time": "2019-02-18 05:31:44",
            "end_time": null,
            "manager": {
                "id": 14,
                "unique_id": "lHrhnPvyBl",
                "name": null,
                "username": "宇野 千代",
                "email": "cmiyazawa@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ypsVDlQxhR",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "pkondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Ygl2yhHo3e",
                    "name": null,
                    "username": "廣川 明美",
                    "email": "nomura.haruka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "tpnW5WIFTn",
                    "name": null,
                    "username": "渡辺 幹",
                    "email": "atsushi83@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "name": "velit",
            "shop_id": "J000109445",
            "budget": 7345,
            "actual": 17409,
            "start_time": "2019-02-18 05:31:44",
            "end_time": "2019-03-05 05:31:44",
            "manager": {
                "id": 14,
                "unique_id": "lHrhnPvyBl",
                "name": null,
                "username": "宇野 千代",
                "email": "cmiyazawa@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Ygl2yhHo3e",
                    "name": null,
                    "username": "廣川 明美",
                    "email": "nomura.haruka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "tpnW5WIFTn",
                    "name": null,
                    "username": "渡辺 幹",
                    "email": "atsushi83@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "83INqqX1ad",
                    "name": null,
                    "username": "三宅 千代",
                    "email": "naoki.hamada@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 85,
            "name": "consectetur",
            "shop_id": "J000109445",
            "budget": 1048,
            "actual": 25299,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 22,
                "unique_id": "YDl4jHSEz6",
                "name": null,
                "username": "井高 修平",
                "email": "taichi28@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "lHrhnPvyBl",
                    "name": null,
                    "username": "宇野 千代",
                    "email": "cmiyazawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "kBLP4owrwb",
                    "name": null,
                    "username": "笹田 あすか",
                    "email": "ekoda.akemi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 86,
            "name": "nihil",
            "shop_id": "J001182216",
            "budget": 18839,
            "actual": 45731,
            "start_time": "2019-02-13 05:31:47",
            "end_time": "2019-02-18 05:31:47",
            "manager": {
                "id": 22,
                "unique_id": "YDl4jHSEz6",
                "name": null,
                "username": "井高 修平",
                "email": "taichi28@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "o030UInCDC",
                    "name": null,
                    "username": "山本 明美",
                    "email": "sayuri.sato@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "HDZcGB7s28",
                    "name": null,
                    "username": "加藤 拓真",
                    "email": "maaya27@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 87,
            "name": "quo",
            "shop_id": "J000753015",
            "budget": 29892,
            "actual": 30698,
            "start_time": "2019-02-18 05:31:47",
            "end_time": null,
            "manager": {
                "id": 22,
                "unique_id": "YDl4jHSEz6",
                "name": null,
                "username": "井高 修平",
                "email": "taichi28@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "lHrhnPvyBl",
                    "name": null,
                    "username": "宇野 千代",
                    "email": "cmiyazawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "HDZcGB7s28",
                    "name": null,
                    "username": "加藤 拓真",
                    "email": "maaya27@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 88,
            "name": "excepturi",
            "shop_id": "J001177654",
            "budget": 25023,
            "actual": 23888,
            "start_time": "2019-02-18 05:31:47",
            "end_time": "2019-03-05 05:31:47",
            "manager": {
                "id": 22,
                "unique_id": "YDl4jHSEz6",
                "name": null,
                "username": "井高 修平",
                "email": "taichi28@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "vTqBX46jwh",
                    "name": null,
                    "username": "加藤 陽子",
                    "email": "aekoda@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "HDZcGB7s28",
                    "name": null,
                    "username": "加藤 拓真",
                    "email": "maaya27@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 160,
            "name": "quo",
            "shop_id": "J000742418",
            "budget": 12432,
            "actual": 42417,
            "start_time": "2019-02-18 05:31:54",
            "end_time": "2019-03-05 05:31:54",
            "manager": {
                "id": 40,
                "unique_id": "kxndqF7FqW",
                "name": null,
                "username": "西之園 くみ子",
                "email": "kana94@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "lHrhnPvyBl",
                    "name": null,
                    "username": "宇野 千代",
                    "email": "cmiyazawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "EDmEC5Ch5a",
                    "name": null,
                    "username": "廣川 七夏",
                    "email": "saito.shuhei@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "kBLP4owrwb",
                    "name": null,
                    "username": "笹田 あすか",
                    "email": "ekoda.akemi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 170,
            "name": "nulla",
            "shop_id": "J001178400",
            "budget": 27849,
            "actual": 16549,
            "start_time": "2019-02-18 05:31:55",
            "end_time": null,
            "manager": {
                "id": 43,
                "unique_id": "it7HokFB5d",
                "name": null,
                "username": "大垣 陽子",
                "email": "shuhei97@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ypsVDlQxhR",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "pkondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "iImEkkXRYt",
                    "name": null,
                    "username": "笹田 英樹",
                    "email": "miki.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "A51FGy3Lhw",
                    "name": null,
                    "username": "藤本 裕美子",
                    "email": "momoko.hirokawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "gclbqn3g4t",
                    "name": null,
                    "username": "笹田 真綾",
                    "email": "maaya.ogaki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 171,
            "name": "voluptatem",
            "shop_id": "J000753015",
            "budget": 15431,
            "actual": 30119,
            "start_time": "2019-02-13 05:31:55",
            "end_time": "2019-02-18 05:31:55",
            "manager": {
                "id": 43,
                "unique_id": "it7HokFB5d",
                "name": null,
                "username": "大垣 陽子",
                "email": "shuhei97@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ypsVDlQxhR",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "pkondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "mEwpAVRit1",
                    "name": null,
                    "username": "村山 太郎",
                    "email": "matsumoto.kana@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "nyFY72qFq1",
                    "name": null,
                    "username": "三宅 知実",
                    "email": "watanabe.shuhei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "gclbqn3g4t",
                    "name": null,
                    "username": "笹田 真綾",
                    "email": "maaya.ogaki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 194,
            "name": "maxime",
            "shop_id": "J000742418",
            "budget": 29553,
            "actual": 40365,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 49,
                "unique_id": "gclbqn3g4t",
                "name": null,
                "username": "笹田 真綾",
                "email": "maaya.ogaki@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "SQ1Q81i4Su",
                    "name": null,
                    "username": "松本 英樹",
                    "email": "ikimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "9gYilQ00yn",
                    "name": null,
                    "username": "吉本 美加子",
                    "email": "fsaito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "wAc2koPVaV",
                    "name": null,
                    "username": "渡辺 太一",
                    "email": "sito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "4royIiVCwf",
                    "name": null,
                    "username": "小泉 零",
                    "email": "fujimoto.akemi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "PWFTIO1DMW",
                    "name": null,
                    "username": "浜田 翔太",
                    "email": "pkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 196,
            "name": "quo",
            "shop_id": "J001006387",
            "budget": 23261,
            "actual": 9899,
            "start_time": "2019-02-13 05:31:58",
            "end_time": "2019-02-18 05:31:58",
            "manager": {
                "id": 49,
                "unique_id": "gclbqn3g4t",
                "name": null,
                "username": "笹田 真綾",
                "email": "maaya.ogaki@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "SQ1Q81i4Su",
                    "name": null,
                    "username": "松本 英樹",
                    "email": "ikimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "CcS2EQ336c",
                    "name": null,
                    "username": "田中 さゆり",
                    "email": "skiriyama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "9gYilQ00yn",
                    "name": null,
                    "username": "吉本 美加子",
                    "email": "fsaito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "wAc2koPVaV",
                    "name": null,
                    "username": "渡辺 太一",
                    "email": "sito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "4royIiVCwf",
                    "name": null,
                    "username": "小泉 零",
                    "email": "fujimoto.akemi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
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
            "id": 38,
            "name": "nihil",
            "shop_id": "J001178400",
            "budget": 12551,
            "actual": 33260,
            "start_time": "2019-02-18 05:31:43",
            "end_time": null,
            "manager": {
                "id": 10,
                "unique_id": "ypsVDlQxhR",
                "name": null,
                "username": "三宅 加奈",
                "email": "pkondo@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "kvMJRGTxQ0",
                    "name": null,
                    "username": "山岸 千代",
                    "email": "rika.kanou@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "IPbhIk1JWe",
                    "name": null,
                    "username": "笹田 陽一",
                    "email": "hanako.kondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "glMTPv0R4x",
                    "name": null,
                    "username": "桐山 くみ子",
                    "email": "kana47@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "kBLP4owrwb",
                    "name": null,
                    "username": "笹田 あすか",
                    "email": "ekoda.akemi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "tXjpTOhAt0",
                    "name": null,
                    "username": "大垣 明美",
                    "email": "jun.nakatsugawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "name": "est",
            "shop_id": "J001125885",
            "budget": 14098,
            "actual": 6694,
            "start_time": "2019-02-18 05:31:43",
            "end_time": null,
            "manager": {
                "id": 10,
                "unique_id": "ypsVDlQxhR",
                "name": null,
                "username": "三宅 加奈",
                "email": "pkondo@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "n1LARs01Vj",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "asuka.tanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "YDl4jHSEz6",
                    "name": null,
                    "username": "井高 修平",
                    "email": "taichi28@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "yj1wXhN32U",
                    "name": null,
                    "username": "渡辺 七夏",
                    "email": "yui.hamada@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "glMTPv0R4x",
                    "name": null,
                    "username": "桐山 くみ子",
                    "email": "kana47@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "gclbqn3g4t",
                    "name": null,
                    "username": "笹田 真綾",
                    "email": "maaya.ogaki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "name": "aliquam",
            "shop_id": "J001006387",
            "budget": 17290,
            "actual": 5809,
            "start_time": "2019-02-18 05:31:44",
            "end_time": null,
            "manager": {
                "id": 14,
                "unique_id": "lHrhnPvyBl",
                "name": null,
                "username": "宇野 千代",
                "email": "cmiyazawa@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ypsVDlQxhR",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "pkondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Ygl2yhHo3e",
                    "name": null,
                    "username": "廣川 明美",
                    "email": "nomura.haruka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "tpnW5WIFTn",
                    "name": null,
                    "username": "渡辺 幹",
                    "email": "atsushi83@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "name": "velit",
            "shop_id": "J000109445",
            "budget": 7345,
            "actual": 17409,
            "start_time": "2019-02-18 05:31:44",
            "end_time": "2019-03-05 05:31:44",
            "manager": {
                "id": 14,
                "unique_id": "lHrhnPvyBl",
                "name": null,
                "username": "宇野 千代",
                "email": "cmiyazawa@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Ygl2yhHo3e",
                    "name": null,
                    "username": "廣川 明美",
                    "email": "nomura.haruka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "tpnW5WIFTn",
                    "name": null,
                    "username": "渡辺 幹",
                    "email": "atsushi83@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "83INqqX1ad",
                    "name": null,
                    "username": "三宅 千代",
                    "email": "naoki.hamada@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 86,
            "name": "nihil",
            "shop_id": "J001182216",
            "budget": 18839,
            "actual": 45731,
            "start_time": "2019-02-13 05:31:47",
            "end_time": "2019-02-18 05:31:47",
            "manager": {
                "id": 22,
                "unique_id": "YDl4jHSEz6",
                "name": null,
                "username": "井高 修平",
                "email": "taichi28@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "o030UInCDC",
                    "name": null,
                    "username": "山本 明美",
                    "email": "sayuri.sato@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "HDZcGB7s28",
                    "name": null,
                    "username": "加藤 拓真",
                    "email": "maaya27@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 87,
            "name": "quo",
            "shop_id": "J000753015",
            "budget": 29892,
            "actual": 30698,
            "start_time": "2019-02-18 05:31:47",
            "end_time": null,
            "manager": {
                "id": 22,
                "unique_id": "YDl4jHSEz6",
                "name": null,
                "username": "井高 修平",
                "email": "taichi28@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "lHrhnPvyBl",
                    "name": null,
                    "username": "宇野 千代",
                    "email": "cmiyazawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "HDZcGB7s28",
                    "name": null,
                    "username": "加藤 拓真",
                    "email": "maaya27@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 170,
            "name": "nulla",
            "shop_id": "J001178400",
            "budget": 27849,
            "actual": 16549,
            "start_time": "2019-02-18 05:31:55",
            "end_time": null,
            "manager": {
                "id": 43,
                "unique_id": "it7HokFB5d",
                "name": null,
                "username": "大垣 陽子",
                "email": "shuhei97@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ypsVDlQxhR",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "pkondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "iImEkkXRYt",
                    "name": null,
                    "username": "笹田 英樹",
                    "email": "miki.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "A51FGy3Lhw",
                    "name": null,
                    "username": "藤本 裕美子",
                    "email": "momoko.hirokawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "gclbqn3g4t",
                    "name": null,
                    "username": "笹田 真綾",
                    "email": "maaya.ogaki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:55.000000",
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
            "id": 20,
            "name": "dolore",
            "shop_id": "J001178400",
            "budget": 12475,
            "actual": 11876,
            "start_time": "2019-02-18 05:31:41",
            "end_time": null,
            "manager": {
                "id": 5,
                "unique_id": "wG1unylGLf",
                "name": null,
                "username": "木村 零",
                "email": "tomoya.ogaki@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "XPn78USYq0",
                    "name": null,
                    "username": "坂本 翔太",
                    "email": "pkiriyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "n1LARs01Vj",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "asuka.tanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "DJvn0GVL8k",
                    "name": null,
                    "username": "三宅 陽一",
                    "email": "fujimoto.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "name": "totam",
            "shop_id": "J001182216",
            "budget": 18222,
            "actual": 37906,
            "start_time": "2019-02-18 05:31:44",
            "end_time": null,
            "manager": {
                "id": 14,
                "unique_id": "lHrhnPvyBl",
                "name": null,
                "username": "宇野 千代",
                "email": "cmiyazawa@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "IPbhIk1JWe",
                    "name": null,
                    "username": "笹田 陽一",
                    "email": "hanako.kondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Ygl2yhHo3e",
                    "name": null,
                    "username": "廣川 明美",
                    "email": "nomura.haruka@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "tpnW5WIFTn",
                    "name": null,
                    "username": "渡辺 幹",
                    "email": "atsushi83@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:44.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 88,
            "name": "excepturi",
            "shop_id": "J001177654",
            "budget": 25023,
            "actual": 23888,
            "start_time": "2019-02-18 05:31:47",
            "end_time": "2019-03-05 05:31:47",
            "manager": {
                "id": 22,
                "unique_id": "YDl4jHSEz6",
                "name": null,
                "username": "井高 修平",
                "email": "taichi28@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "vTqBX46jwh",
                    "name": null,
                    "username": "加藤 陽子",
                    "email": "aekoda@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "HDZcGB7s28",
                    "name": null,
                    "username": "加藤 拓真",
                    "email": "maaya27@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 171,
            "name": "voluptatem",
            "shop_id": "J000753015",
            "budget": 15431,
            "actual": 30119,
            "start_time": "2019-02-13 05:31:55",
            "end_time": "2019-02-18 05:31:55",
            "manager": {
                "id": 43,
                "unique_id": "it7HokFB5d",
                "name": null,
                "username": "大垣 陽子",
                "email": "shuhei97@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "ypsVDlQxhR",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "pkondo@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "mEwpAVRit1",
                    "name": null,
                    "username": "村山 太郎",
                    "email": "matsumoto.kana@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "nyFY72qFq1",
                    "name": null,
                    "username": "三宅 知実",
                    "email": "watanabe.shuhei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "gclbqn3g4t",
                    "name": null,
                    "username": "笹田 真綾",
                    "email": "maaya.ogaki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:55.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 194,
            "name": "maxime",
            "shop_id": "J000742418",
            "budget": 29553,
            "actual": 40365,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 49,
                "unique_id": "gclbqn3g4t",
                "name": null,
                "username": "笹田 真綾",
                "email": "maaya.ogaki@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "SQ1Q81i4Su",
                    "name": null,
                    "username": "松本 英樹",
                    "email": "ikimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "9gYilQ00yn",
                    "name": null,
                    "username": "吉本 美加子",
                    "email": "fsaito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "wAc2koPVaV",
                    "name": null,
                    "username": "渡辺 太一",
                    "email": "sito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "4royIiVCwf",
                    "name": null,
                    "username": "小泉 零",
                    "email": "fujimoto.akemi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "PWFTIO1DMW",
                    "name": null,
                    "username": "浜田 翔太",
                    "email": "pkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
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
            "id": 17,
            "name": "voluptate",
            "shop_id": "J000449898",
            "budget": 2980,
            "actual": 33598,
            "start_time": "2019-02-18 05:31:41",
            "end_time": "2019-03-05 05:31:41",
            "manager": {
                "id": 5,
                "unique_id": "wG1unylGLf",
                "name": null,
                "username": "木村 零",
                "email": "tomoya.ogaki@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "JtbV4iROtE",
                    "name": null,
                    "username": "木村 裕美子",
                    "email": "itanaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "9gYilQ00yn",
                    "name": null,
                    "username": "吉本 美加子",
                    "email": "fsaito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "A51FGy3Lhw",
                    "name": null,
                    "username": "藤本 裕美子",
                    "email": "momoko.hirokawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:41.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 85,
            "name": "consectetur",
            "shop_id": "J000109445",
            "budget": 1048,
            "actual": 25299,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 22,
                "unique_id": "YDl4jHSEz6",
                "name": null,
                "username": "井高 修平",
                "email": "taichi28@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "lHrhnPvyBl",
                    "name": null,
                    "username": "宇野 千代",
                    "email": "cmiyazawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "kBLP4owrwb",
                    "name": null,
                    "username": "笹田 あすか",
                    "email": "ekoda.akemi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 160,
            "name": "quo",
            "shop_id": "J000742418",
            "budget": 12432,
            "actual": 42417,
            "start_time": "2019-02-18 05:31:54",
            "end_time": "2019-03-05 05:31:54",
            "manager": {
                "id": 40,
                "unique_id": "kxndqF7FqW",
                "name": null,
                "username": "西之園 くみ子",
                "email": "kana94@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "lHrhnPvyBl",
                    "name": null,
                    "username": "宇野 千代",
                    "email": "cmiyazawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "EDmEC5Ch5a",
                    "name": null,
                    "username": "廣川 七夏",
                    "email": "saito.shuhei@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "kBLP4owrwb",
                    "name": null,
                    "username": "笹田 あすか",
                    "email": "ekoda.akemi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 196,
            "name": "quo",
            "shop_id": "J001006387",
            "budget": 23261,
            "actual": 9899,
            "start_time": "2019-02-13 05:31:58",
            "end_time": "2019-02-18 05:31:58",
            "manager": {
                "id": 49,
                "unique_id": "gclbqn3g4t",
                "name": null,
                "username": "笹田 真綾",
                "email": "maaya.ogaki@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 7,
                    "unique_id": "SQ1Q81i4Su",
                    "name": null,
                    "username": "松本 英樹",
                    "email": "ikimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "CcS2EQ336c",
                    "name": null,
                    "username": "田中 さゆり",
                    "email": "skiriyama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "9gYilQ00yn",
                    "name": null,
                    "username": "吉本 美加子",
                    "email": "fsaito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "wAc2koPVaV",
                    "name": null,
                    "username": "渡辺 太一",
                    "email": "sito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "4royIiVCwf",
                    "name": null,
                    "username": "小泉 零",
                    "email": "fujimoto.akemi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
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
            "session": "WreXdum2Aj4ojvzz",
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
        "id": 160,
        "name": "quo",
        "shop_id": "J000742418",
        "budget": 12432,
        "actual": 42417,
        "start_time": "2019-02-18 05:31:54",
        "end_time": "2019-03-05 05:31:54",
        "manager": {
            "id": 40,
            "unique_id": "kxndqF7FqW",
            "name": null,
            "username": "西之園 くみ子",
            "email": "kana94@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 14,
                "unique_id": "lHrhnPvyBl",
                "name": null,
                "username": "宇野 千代",
                "email": "cmiyazawa@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 25,
                "unique_id": "EDmEC5Ch5a",
                "name": null,
                "username": "廣川 七夏",
                "email": "saito.shuhei@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 27,
                "unique_id": "kBLP4owrwb",
                "name": null,
                "username": "笹田 あすか",
                "email": "ekoda.akemi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-23 05:31:54.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:54.000000",
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
    -d '{"join_status":"SzmjtRgMKECoSxGd"}'

```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": "SzmjtRgMKECoSxGd"
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
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:58.000000",
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
    -d '{"unique_id":"vM51zlk3BlsSwDLf","username":"UBfSamkrz05iAHuc","password":"NtYhid7tsl9ujMi8","unique_id_search_flag":true,"username_search_flag":true}'

```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "vM51zlk3BlsSwDLf",
    "username": "UBfSamkrz05iAHuc",
    "password": "NtYhid7tsl9ujMi8",
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
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:23.000000",
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
            "unique_id": "JtbV4iROtE",
            "name": null,
            "username": "木村 裕美子",
            "email": "itanaka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "CcS2EQ336c",
            "name": null,
            "username": "田中 さゆり",
            "email": "skiriyama@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "ypsVDlQxhR",
            "name": null,
            "username": "三宅 加奈",
            "email": "pkondo@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "iImEkkXRYt",
            "name": null,
            "username": "笹田 英樹",
            "email": "miki.miyake@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "RzrCJi3Pq2",
            "name": null,
            "username": "伊藤 裕美子",
            "email": "yoko76@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "lHrhnPvyBl",
            "name": null,
            "username": "宇野 千代",
            "email": "cmiyazawa@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "qIQfKSjLTX",
            "name": null,
            "username": "浜田 舞",
            "email": "omurayama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "yj1wXhN32U",
            "name": null,
            "username": "渡辺 七夏",
            "email": "yui.hamada@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "EDmEC5Ch5a",
            "name": null,
            "username": "廣川 七夏",
            "email": "saito.shuhei@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "glMTPv0R4x",
            "name": null,
            "username": "桐山 くみ子",
            "email": "kana47@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "kBLP4owrwb",
            "name": null,
            "username": "笹田 あすか",
            "email": "ekoda.akemi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "9gYilQ00yn",
            "name": null,
            "username": "吉本 美加子",
            "email": "fsaito@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "wAc2koPVaV",
            "name": null,
            "username": "渡辺 太一",
            "email": "sito@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "7sjgzVggVt",
            "name": null,
            "username": "小林 直樹",
            "email": "ktanabe@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "nyFY72qFq1",
            "name": null,
            "username": "三宅 知実",
            "email": "watanabe.shuhei@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "4royIiVCwf",
            "name": null,
            "username": "小泉 零",
            "email": "fujimoto.akemi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "Ygl2yhHo3e",
            "name": null,
            "username": "廣川 明美",
            "email": "nomura.haruka@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "kxndqF7FqW",
            "name": null,
            "username": "西之園 くみ子",
            "email": "kana94@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "tpnW5WIFTn",
            "name": null,
            "username": "渡辺 幹",
            "email": "atsushi83@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "it7HokFB5d",
            "name": null,
            "username": "大垣 陽子",
            "email": "shuhei97@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "HDZcGB7s28",
            "name": null,
            "username": "加藤 拓真",
            "email": "maaya27@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "GePk8HhJze",
            "name": null,
            "username": "原田 篤司",
            "email": "tomoya.nishinosono@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "XwqlO3yfh1",
            "name": null,
            "username": "桐山 さゆり",
            "email": "takuma.tanabe@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "PWFTIO1DMW",
            "name": null,
            "username": "浜田 翔太",
            "email": "pkoizumi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "gclbqn3g4t",
            "name": null,
            "username": "笹田 真綾",
            "email": "maaya.ogaki@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "unique_id": "ORlZvy8czk",
            "name": null,
            "username": "aaaa",
            "email": "YQ1XQD@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-23 05:32:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:32:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "XgcRp9RUEo",
            "name": null,
            "username": "aaaa",
            "email": "EIG6pIS@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-23 05:32:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:32:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 57,
            "unique_id": "XH8BHsRkeU",
            "name": null,
            "username": "aaaa",
            "email": "Qq9EZo7Q@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-23 05:32:17.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:32:17.000000",
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
    -d '{"username":"TiqKuedM2kG0R1Hv"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "TiqKuedM2kG0R1Hv"
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
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
    -d '{"unique_id":"EQ71MQNw8bCrFhzs"}'

```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "EQ71MQNw8bCrFhzs"
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
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:58.000000",
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
    -d '{"unique_id":"gghU0OJ7ytazbRFw"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "gghU0OJ7ytazbRFw"
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "tpnW5WIFTn",
            "name": null,
            "username": "渡辺 幹",
            "email": "atsushi83@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "tXjpTOhAt0",
            "name": null,
            "username": "大垣 明美",
            "email": "jun.nakatsugawa@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
            "session": "OPKhOfDnLMU1hl8J",
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
            "unique_id": "DDDDDDDD",
            "name": null,
            "username": "AAAAAAAAAAA",
            "email": "new@new.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": null,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:32:23.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 8,
            "unique_id": "1kSTW2ZwRR",
            "name": null,
            "username": "青山 あすか",
            "email": "tanaka.nanami@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "tXjpTOhAt0",
            "name": null,
            "username": "大垣 明美",
            "email": "jun.nakatsugawa@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "Vcr21bw8lG",
            "name": null,
            "username": "若松 亮介",
            "email": "aota.youichi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
## sessions.users.store ◆セッションにユーザーを追加する

> Example request:

```bash
curl -X POST "http://localhost/api/sessions/{session}/users" \
    -H "Content-Type: application/json" \
    -d '{"user_id":"ZzArP1JmfU4UbM2b","join_status":"hCdSQqV7R0Npr9R6","paid":17,"plus_minus":12,"budget":16,"budget_actual":14}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "oQhqqXwPcAaGrzxg",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "ZzArP1JmfU4UbM2b",
    "join_status": "hCdSQqV7R0Npr9R6",
    "paid": 17,
    "plus_minus": 12,
    "budget": 16,
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
            "id": 6,
            "unique_id": "vTqBX46jwh",
            "name": null,
            "username": "加藤 陽子",
            "email": "aekoda@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
            "session": "7rsptyV2RYHKgUHE",
            "user": "Do7YYVm05SHI9x48",
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
        "id": 6,
        "unique_id": "vTqBX46jwh",
        "name": null,
        "username": "加藤 陽子",
        "email": "aekoda@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:39.000000",
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
    -d '{"user_id":"CCqRHvUGkvHxRSV7","join_status":2,"paid":8,"plus_minus":14,"budget":11,"budget_actual":2}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "cmYO02GPGaunnIwD",
            "user": "cNdiBYf4sJuqKjrj",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "CCqRHvUGkvHxRSV7",
    "join_status": 2,
    "paid": 8,
    "plus_minus": 14,
    "budget": 11,
    "budget_actual": 2
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
        "id": 17,
        "unique_id": "mEwpAVRit1",
        "name": null,
        "username": "村山 太郎",
        "email": "matsumoto.kana@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:31:39.000000",
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
            "session": "vTwoLXt2Z9B43Mzh",
            "user": "dhHfVkkdTE5msij1",
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
## sessions.users.store_group ◆セッションにあるグループのメンバーを追加する。（重複はしないように追加される。また、join_statusは、　waitなどのDBの初期値で決め打ちされる）。追加した後のsessionのuser一覧を返す

> Example request:

```bash
curl -X POST "http://localhost/api/sessions/{session}/groups/{group}" 
```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/groups/{group}");

    let params = {
            "session": "O9MGBtWlCwHCKlTY",
            "group": "G2uneouUJl8yBo1p",
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
            "name": "provident",
            "shop_id": "J000753015",
            "budget": 27099,
            "actual": 27503,
            "start_time": "2019-02-28 05:31:39",
            "end_time": "2019-03-05 05:31:39",
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 8,
                    "unique_id": "1kSTW2ZwRR",
                    "name": null,
                    "username": "青山 あすか",
                    "email": "tanaka.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "G5Q5ToGH7q",
                    "name": null,
                    "username": "山田 康弘",
                    "email": "tsubasa.ito@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "tXjpTOhAt0",
                    "name": null,
                    "username": "大垣 明美",
                    "email": "jun.nakatsugawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "lXnWrGE1ZU",
                    "name": null,
                    "username": "笹田 直子",
                    "email": "shuhei.nomura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "optio",
            "shop_id": "J001125885",
            "budget": 23113,
            "actual": 39586,
            "start_time": "2019-02-18 05:31:39",
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
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 2,
                    "unique_id": "DDDDDDDD",
                    "name": null,
                    "username": "AAAAAAAAAAA",
                    "email": "new@new.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:32:23.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "tXjpTOhAt0",
                    "name": null,
                    "username": "大垣 明美",
                    "email": "jun.nakatsugawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "lXnWrGE1ZU",
                    "name": null,
                    "username": "笹田 直子",
                    "email": "shuhei.nomura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "ducimus",
            "shop_id": "J000109445",
            "budget": 21915,
            "actual": 22253,
            "start_time": "2019-02-18 05:31:39",
            "end_time": "2019-03-05 05:31:39",
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 2,
                    "unique_id": "DDDDDDDD",
                    "name": null,
                    "username": "AAAAAAAAAAA",
                    "email": "new@new.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:32:23.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "mEwpAVRit1",
                    "name": null,
                    "username": "村山 太郎",
                    "email": "matsumoto.kana@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "Vcr21bw8lG",
                    "name": null,
                    "username": "若松 亮介",
                    "email": "aota.youichi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "lXnWrGE1ZU",
                    "name": null,
                    "username": "笹田 直子",
                    "email": "shuhei.nomura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "ad",
            "shop_id": "J001177654",
            "budget": 7545,
            "actual": 13135,
            "start_time": "2019-02-18 05:31:39",
            "end_time": "2019-03-05 05:31:39",
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 2,
                    "unique_id": "DDDDDDDD",
                    "name": null,
                    "username": "AAAAAAAAAAA",
                    "email": "new@new.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:32:23.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "1kSTW2ZwRR",
                    "name": null,
                    "username": "青山 あすか",
                    "email": "tanaka.nanami@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "tXjpTOhAt0",
                    "name": null,
                    "username": "大垣 明美",
                    "email": "jun.nakatsugawa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "Vcr21bw8lG",
                    "name": null,
                    "username": "若松 亮介",
                    "email": "aota.youichi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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
    -d '{"name":"Qm7MRKEtDDTeVZZ0","shop_id":"8zKY1o9v2u3OHhsS","budget":18,"actual":11,"start_time":"uI1MO3BbwTTPGwW5","end_time":"PYfQd8gGE13pOUKO"}'

```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "Qm7MRKEtDDTeVZZ0",
    "shop_id": "8zKY1o9v2u3OHhsS",
    "budget": 18,
    "actual": 11,
    "start_time": "uI1MO3BbwTTPGwW5",
    "end_time": "PYfQd8gGE13pOUKO"
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
        "name": "newSessionRvXss",
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-02-23 05:32:23.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:23.000000",
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
            "session": "qKgMx98F4AXYNnqZ",
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
        "name": "newSessionRvXss",
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-02-23 05:32:23.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:23.000000",
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
    -d '{"name":"qdQQSclFq9wsYl87","shop_id":20,"budget":7,"actual":8,"start_time":"pxwNzKOruPgPNrhM","end_time":"nJG1tstN7hLdKfsh"}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "SMJFf6gIXLWbHmtZ",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "qdQQSclFq9wsYl87",
    "shop_id": 20,
    "budget": 7,
    "actual": 8,
    "start_time": "pxwNzKOruPgPNrhM",
    "end_time": "nJG1tstN7hLdKfsh"
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
        "id": 3,
        "name": "newUpdateSessionAD5pT",
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
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 2,
                "unique_id": "DDDDDDDD",
                "name": null,
                "username": "AAAAAAAAAAA",
                "email": "new@new.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:32:23.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 17,
                "unique_id": "mEwpAVRit1",
                "name": null,
                "username": "村山 太郎",
                "email": "matsumoto.kana@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 29,
                "unique_id": "Vcr21bw8lG",
                "name": null,
                "username": "若松 亮介",
                "email": "aota.youichi@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 31,
                "unique_id": "lXnWrGE1ZU",
                "name": null,
                "username": "笹田 直子",
                "email": "shuhei.nomura@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-23 05:31:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-23 05:32:24.000000",
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
            "session": "MujeVgOikyueYxjU",
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
            "session": "Twxqc8FSkPK1ajdK",
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
            "unique_id": "DDDDDDDD",
            "name": null,
            "username": "AAAAAAAAAAA",
            "email": "new@new.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "id",
                "plus_minus": -1766,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:32:23.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "mEwpAVRit1",
            "name": null,
            "username": "村山 太郎",
            "email": "matsumoto.kana@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "Vcr21bw8lG",
            "name": null,
            "username": "若松 亮介",
            "email": "aota.youichi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "o030UInCDC",
            "name": null,
            "username": "山本 明美",
            "email": "sayuri.sato@example.com",
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
                        "date": "2019-02-23 05:31:39.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-23 05:31:58.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "incidunt",
                "plus_minus": -1097,
                "created_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-23 05:31:39.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "J2PKHapGx1",
            "name": null,
            "username": "aaaa",
            "email": "NPTRK@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:32:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:32:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "vTqBX46jwh",
            "name": null,
            "username": "加藤 陽子",
            "email": "aekoda@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-23 05:31:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-23 05:31:39.000000",
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


