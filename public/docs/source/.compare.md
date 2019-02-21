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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "dolores",
            "plus_minus": 1997,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "distinctio",
            "plus_minus": -959,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nemo",
            "plus_minus": -868,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nostrum",
            "plus_minus": -19,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "iusto",
            "plus_minus": -2275,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
    -d '{"name":"FULKocWta9JQdGPk","plus_minus":5}'

```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "FULKocWta9JQdGPk",
    "plus_minus": 5
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "attributenameJv5Yu",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-20 08:21:38.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:38.000000",
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
            "attribute": "VMPLdTh4G9K4tzaJ",
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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "iusto",
        "plus_minus": -2275,
        "created_at": {
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:20:51.000000",
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
    -d '{"name":"5BaSdwQnv2YZHxhs","plus_minus":9}'

```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "6hY2o4blqL8bjHvX",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "5BaSdwQnv2YZHxhs",
    "plus_minus": 9
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "updateOY0ac",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:38.000000",
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
            "attribute": "pCcLF1VvZwkLBVM2",
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
    -d '{"email":"kKXQ7zpLX6AIH6a9","username":"ADBl514rvG6o6YV2","password":"JcVxHuXp5FEpn3jv"}'

```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "kKXQ7zpLX6AIH6a9",
    "username": "ADBl514rvG6o6YV2",
    "password": "JcVxHuXp5FEpn3jv"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTA2NTA4OTksImV4cCI6MTU1MDY1NDQ5OSwibmJmIjoxNTUwNjUwODk5LCJqdGkiOiJNRjRkSnFLckRSMFdZYXFtIiwic3ViIjo1MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.-oDo_LhP8A4TwFXsZcELfKTnra67gGJwyRYhTj5BBwE",
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
    -d '{"email":"S5Xro8MRfk5qptgx","password":"1oDxY6IZoqTv2UdB"}'

```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "S5Xro8MRfk5qptgx",
    "password": "1oDxY6IZoqTv2UdB"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTA3MDkwMTEsImV4cCI6MTU1MDcxMjYxMSwibmJmIjoxNTUwNzA5MDExLCJqdGkiOiJETnl2Y1hEeEMweHI1TWpDIiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.hCYsV_w81xERNeYNniMrXldZxp1PZvukHGgX9nstIa4",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MDY1MDg5OSwiZXhwIjoxNTUwNjU0NDk5LCJuYmYiOjE1NTA2NTA4OTksImp0aSI6InlsR0NqQzc4NExWeElqbkYiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ATTLVeK7303DBgwG1RPwjGBmgyJ_Rl3HUruFRR6tpRQ",
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
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:11.000000",
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
    -d '{"email":"gP1smEFMiYhJTsdW","password":"x1l9ClozpNhCJdIb"}'

```

```javascript
const url = new URL("http://localhost/api/admin/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "gP1smEFMiYhJTsdW",
    "password": "x1l9ClozpNhCJdIb"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTA3MDkwMTEsImV4cCI6MTU1MDcxMjYxMSwibmJmIjoxNTUwNzA5MDExLCJqdGkiOiJETnl2Y1hEeEMweHI1TWpDIiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.hCYsV_w81xERNeYNniMrXldZxp1PZvukHGgX9nstIa4",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ab",
                "users": [
                    {
                        "id": 50,
                        "unique_id": "uk1h800mbN",
                        "name": null,
                        "username": "井上 晃",
                        "email": "murayama.naoki@example.com",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-20 08:20:51.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-20 08:20:51.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    }
                ],
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "6ywG5Yd",
            "timer": "01:00:00",
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
    -d '{"name":"n2S8JCaKG9ygEqOs","timer":17,"group_id":1}'

```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "n2S8JCaKG9ygEqOs",
    "timer": 17,
    "group_id": 1
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "ipsam",
            "users": [
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "6ywG5Yd",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-20 08:21:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:39.000000",
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
            "default_setting": "CeNgbt1m4l6VPj9F",
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "ab",
            "users": [
                {
                    "id": 50,
                    "unique_id": "uk1h800mbN",
                    "name": null,
                    "username": "井上 晃",
                    "email": "murayama.naoki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "6ywG5Yd",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:20:51.000000",
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
    -d '{"name":"oelLoud2JlXMcoQx","timer":14,"group_id":6}'

```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "cTZbsPzKcj60LWGK",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "oelLoud2JlXMcoQx",
    "timer": 14,
    "group_id": 6
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "ab",
            "users": [
                {
                    "id": 50,
                    "unique_id": "uk1h800mbN",
                    "name": null,
                    "username": "井上 晃",
                    "email": "murayama.naoki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newSettingsEotYu1eN",
        "timer": "01:00:00",
        "created_at": {
            "date": "2019-02-20 08:21:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:39.000000",
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
            "default_setting": "oDDgjyeZuW0RCAjT",
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
            "id": 10,
            "unique_id": "FHDSwupeNM",
            "name": null,
            "username": "井上 春香",
            "email": "takuma18@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nemo",
                "plus_minus": -868,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "gkbXEalhCo",
            "name": null,
            "username": "坂本 充",
            "email": "satomi40@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolores",
                "plus_minus": 1997,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "un6sTojKDv",
            "name": null,
            "username": "桐山 翼",
            "email": "maaya39@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": -2275,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "tUCFq2xFYj",
            "name": null,
            "username": "伊藤 修平",
            "email": "mitsuru34@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "uk1h800mbN",
            "name": null,
            "username": "井上 晃",
            "email": "murayama.naoki@example.com",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": -2275,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
    -d '{"email":"v3A6MAhPQim6MajZ"}'

```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "v3A6MAhPQim6MajZ"
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
        "date": "2019-02-20 08:20:51.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-20 08:21:11.000000",
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
            "id": 3,
            "unique_id": "oPNVgPbi1x",
            "name": null,
            "username": "工藤 真綾",
            "email": "dkoizumi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 15,
                "manager": {
                    "id": 3,
                    "unique_id": "oPNVgPbi1x",
                    "name": null,
                    "username": "工藤 真綾",
                    "email": "dkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "facere",
                "plus_minus": -530,
                "created_at": {
                    "date": "2019-02-20 08:20:52.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:52.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "QnnDPJ0aYC",
            "name": null,
            "username": "喜嶋 知実",
            "email": "naoki83@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 81,
                "manager": {
                    "id": 17,
                    "unique_id": "QnnDPJ0aYC",
                    "name": null,
                    "username": "喜嶋 知実",
                    "email": "naoki83@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "sed",
                "plus_minus": 1772,
                "created_at": {
                    "date": "2019-02-20 08:20:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "nGdswUzo1f",
            "name": null,
            "username": "津田 零",
            "email": "iaoyama@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 96,
                "manager": {
                    "id": 20,
                    "unique_id": "nGdswUzo1f",
                    "name": null,
                    "username": "津田 零",
                    "email": "iaoyama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quia",
                "plus_minus": -1862,
                "created_at": {
                    "date": "2019-02-20 08:20:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "N0GnRDTJiQ",
            "name": null,
            "username": "山口 翔太",
            "email": "ssasada@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 143,
                "manager": {
                    "id": 29,
                    "unique_id": "N0GnRDTJiQ",
                    "name": null,
                    "username": "山口 翔太",
                    "email": "ssasada@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consectetur",
                "plus_minus": 2655,
                "created_at": {
                    "date": "2019-02-20 08:21:02.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:02.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "EC5RPOwM5q",
            "name": null,
            "username": "三宅 晃",
            "email": "taichi41@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 202,
                "manager": {
                    "id": 41,
                    "unique_id": "EC5RPOwM5q",
                    "name": null,
                    "username": "三宅 晃",
                    "email": "taichi41@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": -1124,
                "created_at": {
                    "date": "2019-02-20 08:21:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "iaE0YfW03e",
            "name": null,
            "username": "宇野 聡太郎",
            "email": "hirokawa.rei@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 211,
                "manager": {
                    "id": 43,
                    "unique_id": "iaE0YfW03e",
                    "name": null,
                    "username": "宇野 聡太郎",
                    "email": "hirokawa.rei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptatibus",
                "plus_minus": 2164,
                "created_at": {
                    "date": "2019-02-20 08:21:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
            "id": 4,
            "unique_id": "g5nhCI1p2B",
            "name": null,
            "username": "高橋 真綾",
            "email": "naoto.nakatsugawa@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nostrum",
                "plus_minus": -19,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "0h3vR07rHu",
            "name": null,
            "username": "中村 篤司",
            "email": "lmiyazawa@example.net",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nemo",
                "plus_minus": -868,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "JlkOzSIpHq",
            "name": null,
            "username": "吉田 直子",
            "email": "sayuri.sasada@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": null,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "xEbM9HRikS",
            "name": null,
            "username": "大垣 和也",
            "email": "chiyo.yoshimoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": null,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "nGdswUzo1f",
            "name": null,
            "username": "津田 零",
            "email": "iaoyama@example.com",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolores",
                "plus_minus": 1997,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "MeCQa5G5zj",
            "name": null,
            "username": "大垣 くみ子",
            "email": "mitsuru57@example.com",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nostrum",
                "plus_minus": -19,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "gXEoof5NZR",
            "name": null,
            "username": "木村 桃子",
            "email": "iidaka@example.net",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nemo",
                "plus_minus": -868,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "ny4YD40JfO",
            "name": null,
            "username": "津田 くみ子",
            "email": "kazuya05@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nemo",
                "plus_minus": -868,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "zoeHR3Vwiw",
            "name": null,
            "username": "山口 翔太",
            "email": "manabu.aota@example.com",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": -2275,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "jj8j8UjyL2",
            "name": null,
            "username": "笹田 真綾",
            "email": "uito@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nemo",
                "plus_minus": -868,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
            "unique_id": "GnQ7TvLmfo",
            "name": null,
            "username": "原田 さゆり",
            "email": "rika.sakamoto@example.com",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nostrum",
                "plus_minus": -19,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 8,
            "unique_id": "lkNhyJRz6X",
            "name": null,
            "username": "木村 あすか",
            "email": "naoko10@example.com",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": -2275,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "3SMO1mbOoz",
            "name": null,
            "username": "野村 結衣",
            "email": "jito@example.net",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nostrum",
                "plus_minus": -19,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "pV6SElxxBq",
            "name": null,
            "username": "木村 智也",
            "email": "yosuke66@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "wMkVcqDtep",
            "name": null,
            "username": "津田 翔太",
            "email": "kumiko21@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "g7COREmnJm",
            "name": null,
            "username": "佐藤 陽子",
            "email": "naoto64@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolores",
                "plus_minus": 1997,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "1bpMhmUjvZ",
            "name": null,
            "username": "宮沢 あすか",
            "email": "kana20@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nostrum",
                "plus_minus": -19,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "adOutg3Y9D",
            "name": null,
            "username": "宇野 修平",
            "email": "vyoshimoto@example.net",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": -2275,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "hjDSDUZkg9",
            "name": null,
            "username": "笹田 英樹",
            "email": "yuki.tsuda@example.net",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolores",
                "plus_minus": 1997,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "tWJN9edHjT",
            "name": null,
            "username": "近藤 浩",
            "email": "maaya.wakamatsu@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nostrum",
                "plus_minus": -19,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "unique_id": "7cyw70jEPO",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-20 08:21:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:39.000000",
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
            "id": 8,
            "unique_id": "lkNhyJRz6X",
            "name": null,
            "username": "木村 あすか",
            "email": "naoko10@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 38,
                "manager": {
                    "id": 8,
                    "unique_id": "lkNhyJRz6X",
                    "name": null,
                    "username": "木村 あすか",
                    "email": "naoko10@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iste",
                "plus_minus": -355,
                "created_at": {
                    "date": "2019-02-20 08:20:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "3SMO1mbOoz",
            "name": null,
            "username": "野村 結衣",
            "email": "jito@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 44,
                "manager": {
                    "id": 9,
                    "unique_id": "3SMO1mbOoz",
                    "name": null,
                    "username": "野村 結衣",
                    "email": "jito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": 762,
                "created_at": {
                    "date": "2019-02-20 08:20:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "WtPLjMca99",
            "name": null,
            "username": "近藤 裕樹",
            "email": "soutaro02@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 110,
                "manager": {
                    "id": 22,
                    "unique_id": "WtPLjMca99",
                    "name": null,
                    "username": "近藤 裕樹",
                    "email": "soutaro02@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "suscipit",
                "plus_minus": 2100,
                "created_at": {
                    "date": "2019-02-20 08:20:59.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:59.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "kBLIJLPWV1",
            "name": null,
            "username": "野村 明美",
            "email": "atsushi65@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 112,
                "manager": {
                    "id": 23,
                    "unique_id": "kBLIJLPWV1",
                    "name": null,
                    "username": "野村 明美",
                    "email": "atsushi65@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptas",
                "plus_minus": -68,
                "created_at": {
                    "date": "2019-02-20 08:20:59.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:59.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "13xF3wxebM",
            "name": null,
            "username": "伊藤 くみ子",
            "email": "yamaguchi.kaori@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 131,
                "manager": {
                    "id": 27,
                    "unique_id": "13xF3wxebM",
                    "name": null,
                    "username": "伊藤 くみ子",
                    "email": "yamaguchi.kaori@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "rerum",
                "plus_minus": 1525,
                "created_at": {
                    "date": "2019-02-20 08:21:01.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:01.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "1bpMhmUjvZ",
            "name": null,
            "username": "宮沢 あすか",
            "email": "kana20@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 152,
                "manager": {
                    "id": 31,
                    "unique_id": "1bpMhmUjvZ",
                    "name": null,
                    "username": "宮沢 あすか",
                    "email": "kana20@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "architecto",
                "plus_minus": 2589,
                "created_at": {
                    "date": "2019-02-20 08:21:02.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:02.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "IdZpaouVoK",
            "name": null,
            "username": "喜嶋 京助",
            "email": "takuma88@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 162,
                "manager": {
                    "id": 33,
                    "unique_id": "IdZpaouVoK",
                    "name": null,
                    "username": "喜嶋 京助",
                    "email": "takuma88@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolores",
                "plus_minus": -687,
                "created_at": {
                    "date": "2019-02-20 08:21:03.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:03.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "adOutg3Y9D",
            "name": null,
            "username": "宇野 修平",
            "email": "vyoshimoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 174,
                "manager": {
                    "id": 35,
                    "unique_id": "adOutg3Y9D",
                    "name": null,
                    "username": "宇野 修平",
                    "email": "vyoshimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nisi",
                "plus_minus": 2152,
                "created_at": {
                    "date": "2019-02-20 08:21:04.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:04.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "hjDSDUZkg9",
            "name": null,
            "username": "笹田 英樹",
            "email": "yuki.tsuda@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 224,
                "manager": {
                    "id": 45,
                    "unique_id": "hjDSDUZkg9",
                    "name": null,
                    "username": "笹田 英樹",
                    "email": "yuki.tsuda@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ad",
                "plus_minus": -2883,
                "created_at": {
                    "date": "2019-02-20 08:21:08.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:08.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "jj8j8UjyL2",
            "name": null,
            "username": "笹田 真綾",
            "email": "uito@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 232,
                "manager": {
                    "id": 47,
                    "unique_id": "jj8j8UjyL2",
                    "name": null,
                    "username": "笹田 真綾",
                    "email": "uito@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "praesentium",
                "plus_minus": 331,
                "created_at": {
                    "date": "2019-02-20 08:21:09.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:09.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "uk1h800mbN",
            "name": null,
            "username": "井上 晃",
            "email": "murayama.naoki@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 247,
                "manager": {
                    "id": 50,
                    "unique_id": "uk1h800mbN",
                    "name": null,
                    "username": "井上 晃",
                    "email": "murayama.naoki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "amet",
                "plus_minus": -1343,
                "created_at": {
                    "date": "2019-02-20 08:21:10.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:10.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
            "id": 2,
            "unique_id": "dY6cbMByM7",
            "name": null,
            "username": "山本 明美",
            "email": "kyosuke.kimura@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 10,
                "manager": {
                    "id": 2,
                    "unique_id": "dY6cbMByM7",
                    "name": null,
                    "username": "山本 明美",
                    "email": "kyosuke.kimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ut",
                "plus_minus": 29,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "FHDSwupeNM",
            "name": null,
            "username": "井上 春香",
            "email": "takuma18@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 46,
                "manager": {
                    "id": 10,
                    "unique_id": "FHDSwupeNM",
                    "name": null,
                    "username": "井上 春香",
                    "email": "takuma18@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "laboriosam",
                "plus_minus": 2437,
                "created_at": {
                    "date": "2019-02-20 08:20:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:54.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "ZxWZSJdXBh",
            "name": null,
            "username": "小泉 くみ子",
            "email": "csakamoto@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 51,
                "manager": {
                    "id": 11,
                    "unique_id": "ZxWZSJdXBh",
                    "name": null,
                    "username": "小泉 くみ子",
                    "email": "csakamoto@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptas",
                "plus_minus": -2623,
                "created_at": {
                    "date": "2019-02-20 08:20:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "gkbXEalhCo",
            "name": null,
            "username": "坂本 充",
            "email": "satomi40@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 63,
                "manager": {
                    "id": 13,
                    "unique_id": "gkbXEalhCo",
                    "name": null,
                    "username": "坂本 充",
                    "email": "satomi40@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptatem",
                "plus_minus": -2406,
                "created_at": {
                    "date": "2019-02-20 08:20:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:55.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "EsMWV66rCg",
            "name": null,
            "username": "廣川 春香",
            "email": "rei.sugiyama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 69,
                "manager": {
                    "id": 14,
                    "unique_id": "EsMWV66rCg",
                    "name": null,
                    "username": "廣川 春香",
                    "email": "rei.sugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "voluptatem",
                "plus_minus": -2437,
                "created_at": {
                    "date": "2019-02-20 08:20:56.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:56.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "JlkOzSIpHq",
            "name": null,
            "username": "吉田 直子",
            "email": "sayuri.sasada@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 74,
                "manager": {
                    "id": 15,
                    "unique_id": "JlkOzSIpHq",
                    "name": null,
                    "username": "吉田 直子",
                    "email": "sayuri.sasada@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "omnis",
                "plus_minus": -1021,
                "created_at": {
                    "date": "2019-02-20 08:20:56.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:56.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "xEbM9HRikS",
            "name": null,
            "username": "大垣 和也",
            "email": "chiyo.yoshimoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 79,
                "manager": {
                    "id": 16,
                    "unique_id": "xEbM9HRikS",
                    "name": null,
                    "username": "大垣 和也",
                    "email": "chiyo.yoshimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": 1921,
                "created_at": {
                    "date": "2019-02-20 08:20:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "tywjLd2S6O",
            "name": null,
            "username": "廣川 零",
            "email": "yui.ito@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 86,
                "manager": {
                    "id": 18,
                    "unique_id": "tywjLd2S6O",
                    "name": null,
                    "username": "廣川 零",
                    "email": "yui.ito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "asperiores",
                "plus_minus": 185,
                "created_at": {
                    "date": "2019-02-20 08:20:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:57.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "un6sTojKDv",
            "name": null,
            "username": "桐山 翼",
            "email": "maaya39@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 94,
                "manager": {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "maxime",
                "plus_minus": -724,
                "created_at": {
                    "date": "2019-02-20 08:20:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:58.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "A2MnhFNYlS",
            "name": null,
            "username": "西之園 幹",
            "email": "akira.sasaki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 140,
                "manager": {
                    "id": 28,
                    "unique_id": "A2MnhFNYlS",
                    "name": null,
                    "username": "西之園 幹",
                    "email": "akira.sasaki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ratione",
                "plus_minus": 869,
                "created_at": {
                    "date": "2019-02-20 08:21:01.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:01.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "ny4YD40JfO",
            "name": null,
            "username": "津田 くみ子",
            "email": "kazuya05@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 179,
                "manager": {
                    "id": 36,
                    "unique_id": "ny4YD40JfO",
                    "name": null,
                    "username": "津田 くみ子",
                    "email": "kazuya05@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "sit",
                "plus_minus": -2546,
                "created_at": {
                    "date": "2019-02-20 08:21:04.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:04.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "zoeHR3Vwiw",
            "name": null,
            "username": "山口 翔太",
            "email": "manabu.aota@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 186,
                "manager": {
                    "id": 38,
                    "unique_id": "zoeHR3Vwiw",
                    "name": null,
                    "username": "山口 翔太",
                    "email": "manabu.aota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quos",
                "plus_minus": 258,
                "created_at": {
                    "date": "2019-02-20 08:21:05.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:05.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "7MrNKirULp",
            "name": null,
            "username": "小林 稔",
            "email": "sakamoto.kenichi@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 217,
                "manager": {
                    "id": 44,
                    "unique_id": "7MrNKirULp",
                    "name": null,
                    "username": "小林 稔",
                    "email": "sakamoto.kenichi@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "sequi",
                "plus_minus": 2344,
                "created_at": {
                    "date": "2019-02-20 08:21:08.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:08.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
    -d '{"user_id":8}'

```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 8
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
    -d '{"user_id":19}'

```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 19
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
    -d '{"attribute_id":11}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "7m6FuzOpKDSHXm0h",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 11
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
    -d '{"attribute_id":5}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "A7Mv6arHjPYVgLwD",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 5
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
            "friend": "WLT2eddTs1vhdNdh",
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
            "friend": "CZtUJJ5LlES5Gper",
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
            "friend": "CCiYUSvlDNwCLPpA",
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
            "friend": "eQV9ef2vjmYCfsd1",
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
        "id": 10,
        "unique_id": "FHDSwupeNM",
        "name": null,
        "username": "井上 春香",
        "email": "takuma18@example.org",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nemo",
            "plus_minus": -868,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:20:51.000000",
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
            "friend": "5otBapkZQfz2nt3z",
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
            "group": "4YgEMT4V81mtimnJ",
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
            "id": 19,
            "unique_id": "un6sTojKDv",
            "name": null,
            "username": "桐山 翼",
            "email": "maaya39@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
    -d '{"user_id":5}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "zbnlOdfS3h2VPQjg",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 5
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
            "group": "XMix9P9bxAE1bKPq",
            "user": "LhcgJ22zsJ1ESUTJ",
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
        "id": 13,
        "unique_id": "gkbXEalhCo",
        "name": null,
        "username": "坂本 充",
        "email": "satomi40@example.org",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:20:51.000000",
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
            "group": "wMIVAfeu2dGoZbtR",
            "user": "TyQIkC1Y0OejJXfm",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "ab",
            "users": [],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nesciunt",
            "users": [],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "ipsam",
            "users": [
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
    -d '{"name":"y08VpT3mLG4609CK"}'

```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "y08VpT3mLG4609CK"
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
        "id": 152,
        "manager": {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "nesciunt",
        "users": [],
        "created_at": {
            "date": "2019-02-20 08:21:40.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:40.000000",
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
            "group": "7IgWEGM8mWjLWmh9",
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
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "nesciunt",
        "users": [],
        "created_at": {
            "date": "2019-02-20 08:21:40.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:40.000000",
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
    -d '{"name":"8nIBiJiqdSi1q73S"}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "CXHQsDQI41GNbuNa",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "8nIBiJiqdSi1q73S"
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newGroup1IctecmL",
        "users": [],
        "created_at": {
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:40.000000",
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
            "group": "J8PfVYGm7AzRkdre",
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
            "group": "6r7x9aXqpXHypMWZ",
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
            "unique_id": "FHDSwupeNM",
            "name": null,
            "username": "井上 春香",
            "email": "takuma18@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nemo",
                "plus_minus": -868,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "gkbXEalhCo",
            "name": null,
            "username": "坂本 充",
            "email": "satomi40@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolores",
                "plus_minus": 1997,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "un6sTojKDv",
            "name": null,
            "username": "桐山 翼",
            "email": "maaya39@example.org",
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
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": -2275,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "tUCFq2xFYj",
            "name": null,
            "username": "伊藤 修平",
            "email": "mitsuru34@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "DC4piL707r",
            "name": null,
            "username": "aaaa",
            "email": "RDwtD@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-20 08:21:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "EC5RPOwM5q",
            "name": null,
            "username": "三宅 晃",
            "email": "taichi41@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
            "id": 29,
            "name": "amet",
            "shop_id": "151",
            "budget": 17180,
            "actual": 48710,
            "start_time": "1999-09-16 12:56:58",
            "end_time": null,
            "manager": {
                "id": 8,
                "unique_id": "lkNhyJRz6X",
                "name": null,
                "username": "木村 あすか",
                "email": "naoko10@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "A2MnhFNYlS",
                    "name": null,
                    "username": "西之園 幹",
                    "email": "akira.sasaki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "gXEoof5NZR",
                    "name": null,
                    "username": "木村 桃子",
                    "email": "iidaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "7MrNKirULp",
                    "name": null,
                    "username": "小林 稔",
                    "email": "sakamoto.kenichi@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "name": "praesentium",
            "shop_id": "604",
            "budget": 3541,
            "actual": 19503,
            "start_time": "2011-01-19 04:17:30",
            "end_time": null,
            "manager": {
                "id": 8,
                "unique_id": "lkNhyJRz6X",
                "name": null,
                "username": "木村 あすか",
                "email": "naoko10@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "QnnDPJ0aYC",
                    "name": null,
                    "username": "喜嶋 知実",
                    "email": "naoki83@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "OGBYyAZNGm",
                    "name": null,
                    "username": "山田 真綾",
                    "email": "matsumoto.hiroshi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "7MrNKirULp",
                    "name": null,
                    "username": "小林 稔",
                    "email": "sakamoto.kenichi@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "name": "est",
            "shop_id": "700",
            "budget": 26235,
            "actual": 29413,
            "start_time": "1976-06-29 11:11:43",
            "end_time": null,
            "manager": {
                "id": 9,
                "unique_id": "3SMO1mbOoz",
                "name": null,
                "username": "野村 結衣",
                "email": "jito@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "oPNVgPbi1x",
                    "name": null,
                    "username": "工藤 真綾",
                    "email": "dkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 17,
                    "unique_id": "QnnDPJ0aYC",
                    "name": null,
                    "username": "喜嶋 知実",
                    "email": "naoki83@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "WtPLjMca99",
                    "name": null,
                    "username": "近藤 裕樹",
                    "email": "soutaro02@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "EC5RPOwM5q",
                    "name": null,
                    "username": "三宅 晃",
                    "email": "taichi41@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "3tkwLjHvho",
                    "name": null,
                    "username": "中村 浩",
                    "email": "maaya03@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "name": "et",
            "shop_id": "795",
            "budget": 14431,
            "actual": 46740,
            "start_time": "2003-11-09 03:14:56",
            "end_time": null,
            "manager": {
                "id": 9,
                "unique_id": "3SMO1mbOoz",
                "name": null,
                "username": "野村 結衣",
                "email": "jito@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "oPNVgPbi1x",
                    "name": null,
                    "username": "工藤 真綾",
                    "email": "dkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 29,
                    "unique_id": "N0GnRDTJiQ",
                    "name": null,
                    "username": "山口 翔太",
                    "email": "ssasada@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "adOutg3Y9D",
                    "name": null,
                    "username": "宇野 修平",
                    "email": "vyoshimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "7MrNKirULp",
                    "name": null,
                    "username": "小林 稔",
                    "email": "sakamoto.kenichi@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "8YCpz0tCrp",
                    "name": null,
                    "username": "山口 京助",
                    "email": "etsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "uk1h800mbN",
                    "name": null,
                    "username": "井上 晃",
                    "email": "murayama.naoki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 88,
            "name": "non",
            "shop_id": "965",
            "budget": 27554,
            "actual": 25363,
            "start_time": "1973-09-29 17:53:02",
            "end_time": null,
            "manager": {
                "id": 22,
                "unique_id": "WtPLjMca99",
                "name": null,
                "username": "近藤 裕樹",
                "email": "soutaro02@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "oPNVgPbi1x",
                    "name": null,
                    "username": "工藤 真綾",
                    "email": "dkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "pV6SElxxBq",
                    "name": null,
                    "username": "木村 智也",
                    "email": "yosuke66@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "iaE0YfW03e",
                    "name": null,
                    "username": "宇野 聡太郎",
                    "email": "hirokawa.rei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:59.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:59.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 92,
            "name": "beatae",
            "shop_id": "720",
            "budget": 7348,
            "actual": 16776,
            "start_time": "2009-12-31 22:14:09",
            "end_time": null,
            "manager": {
                "id": 23,
                "unique_id": "kBLIJLPWV1",
                "name": null,
                "username": "野村 明美",
                "email": "atsushi65@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "lkNhyJRz6X",
                    "name": null,
                    "username": "木村 あすか",
                    "email": "naoko10@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "3SMO1mbOoz",
                    "name": null,
                    "username": "野村 結衣",
                    "email": "jito@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "JlkOzSIpHq",
                    "name": null,
                    "username": "吉田 直子",
                    "email": "sayuri.sasada@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 122,
            "name": "et",
            "shop_id": "387",
            "budget": 12734,
            "actual": 36237,
            "start_time": "1999-11-21 21:07:10",
            "end_time": null,
            "manager": {
                "id": 31,
                "unique_id": "1bpMhmUjvZ",
                "name": null,
                "username": "宮沢 あすか",
                "email": "kana20@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 2,
                    "unique_id": "dY6cbMByM7",
                    "name": null,
                    "username": "山本 明美",
                    "email": "kyosuke.kimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "e6DThwehfQ",
                    "name": null,
                    "username": "西之園 明美",
                    "email": "rei42@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 123,
            "name": "et",
            "shop_id": "164",
            "budget": 16371,
            "actual": 38461,
            "start_time": "2017-06-25 16:48:22",
            "end_time": null,
            "manager": {
                "id": 31,
                "unique_id": "1bpMhmUjvZ",
                "name": null,
                "username": "宮沢 あすか",
                "email": "kana20@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 12,
                    "unique_id": "e6DThwehfQ",
                    "name": null,
                    "username": "西之園 明美",
                    "email": "rei42@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "3tkwLjHvho",
                    "name": null,
                    "username": "中村 浩",
                    "email": "maaya03@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 124,
            "name": "rem",
            "shop_id": "595",
            "budget": 12533,
            "actual": 34817,
            "start_time": "2005-09-17 06:28:19",
            "end_time": null,
            "manager": {
                "id": 31,
                "unique_id": "1bpMhmUjvZ",
                "name": null,
                "username": "宮沢 あすか",
                "email": "kana20@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "7MrNKirULp",
                    "name": null,
                    "username": "小林 稔",
                    "email": "sakamoto.kenichi@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "hjDSDUZkg9",
                    "name": null,
                    "username": "笹田 英樹",
                    "email": "yuki.tsuda@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:03.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 138,
            "name": "assumenda",
            "shop_id": "483",
            "budget": 17192,
            "actual": 37635,
            "start_time": "1982-06-09 04:02:53",
            "end_time": null,
            "manager": {
                "id": 35,
                "unique_id": "adOutg3Y9D",
                "name": null,
                "username": "宇野 修平",
                "email": "vyoshimoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 2,
                    "unique_id": "dY6cbMByM7",
                    "name": null,
                    "username": "山本 明美",
                    "email": "kyosuke.kimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "WtPLjMca99",
                    "name": null,
                    "username": "近藤 裕樹",
                    "email": "soutaro02@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "vmVDZjECA5",
                    "name": null,
                    "username": "小泉 淳",
                    "email": "nanami.kimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "7MrNKirULp",
                    "name": null,
                    "username": "小林 稔",
                    "email": "sakamoto.kenichi@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 140,
            "name": "eveniet",
            "shop_id": "933",
            "budget": 21288,
            "actual": 45574,
            "start_time": "1996-11-12 02:28:44",
            "end_time": null,
            "manager": {
                "id": 35,
                "unique_id": "adOutg3Y9D",
                "name": null,
                "username": "宇野 修平",
                "email": "vyoshimoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 2,
                    "unique_id": "dY6cbMByM7",
                    "name": null,
                    "username": "山本 明美",
                    "email": "kyosuke.kimura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "zoeHR3Vwiw",
                    "name": null,
                    "username": "山口 翔太",
                    "email": "manabu.aota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "iaE0YfW03e",
                    "name": null,
                    "username": "宇野 聡太郎",
                    "email": "hirokawa.rei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "7MrNKirULp",
                    "name": null,
                    "username": "小林 稔",
                    "email": "sakamoto.kenichi@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 177,
            "name": "sed",
            "shop_id": "424",
            "budget": 9428,
            "actual": 5820,
            "start_time": "2002-09-15 16:04:10",
            "end_time": null,
            "manager": {
                "id": 45,
                "unique_id": "hjDSDUZkg9",
                "name": null,
                "username": "笹田 英樹",
                "email": "yuki.tsuda@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "GnQ7TvLmfo",
                    "name": null,
                    "username": "原田 さゆり",
                    "email": "rika.sakamoto@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "WtPLjMca99",
                    "name": null,
                    "username": "近藤 裕樹",
                    "email": "soutaro02@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "MeCQa5G5zj",
                    "name": null,
                    "username": "大垣 くみ子",
                    "email": "mitsuru57@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "iaE0YfW03e",
                    "name": null,
                    "username": "宇野 聡太郎",
                    "email": "hirokawa.rei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "8YCpz0tCrp",
                    "name": null,
                    "username": "山口 京助",
                    "email": "etsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 178,
            "name": "quasi",
            "shop_id": "321",
            "budget": 4848,
            "actual": 40830,
            "start_time": "2015-07-31 06:39:30",
            "end_time": null,
            "manager": {
                "id": 45,
                "unique_id": "hjDSDUZkg9",
                "name": null,
                "username": "笹田 英樹",
                "email": "yuki.tsuda@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "FHDSwupeNM",
                    "name": null,
                    "username": "井上 春香",
                    "email": "takuma18@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "MeCQa5G5zj",
                    "name": null,
                    "username": "大垣 くみ子",
                    "email": "mitsuru57@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "iaE0YfW03e",
                    "name": null,
                    "username": "宇野 聡太郎",
                    "email": "hirokawa.rei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "7MrNKirULp",
                    "name": null,
                    "username": "小林 稔",
                    "email": "sakamoto.kenichi@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "8YCpz0tCrp",
                    "name": null,
                    "username": "山口 京助",
                    "email": "etsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 179,
            "name": "aut",
            "shop_id": "242",
            "budget": 27613,
            "actual": 12271,
            "start_time": "1979-04-06 13:09:58",
            "end_time": null,
            "manager": {
                "id": 45,
                "unique_id": "hjDSDUZkg9",
                "name": null,
                "username": "笹田 英樹",
                "email": "yuki.tsuda@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "oPNVgPbi1x",
                    "name": null,
                    "username": "工藤 真綾",
                    "email": "dkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "GnQ7TvLmfo",
                    "name": null,
                    "username": "原田 さゆり",
                    "email": "rika.sakamoto@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "EC5RPOwM5q",
                    "name": null,
                    "username": "三宅 晃",
                    "email": "taichi41@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "iaE0YfW03e",
                    "name": null,
                    "username": "宇野 聡太郎",
                    "email": "hirokawa.rei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "7MrNKirULp",
                    "name": null,
                    "username": "小林 稔",
                    "email": "sakamoto.kenichi@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 185,
            "name": "nam",
            "shop_id": "198",
            "budget": 3883,
            "actual": 30409,
            "start_time": "2012-07-04 07:19:08",
            "end_time": null,
            "manager": {
                "id": 47,
                "unique_id": "jj8j8UjyL2",
                "name": null,
                "username": "笹田 真綾",
                "email": "uito@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "13xF3wxebM",
                    "name": null,
                    "username": "伊藤 くみ子",
                    "email": "yamaguchi.kaori@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "EC5RPOwM5q",
                    "name": null,
                    "username": "三宅 晃",
                    "email": "taichi41@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 186,
            "name": "ipsam",
            "shop_id": "362",
            "budget": 19068,
            "actual": 31771,
            "start_time": "2000-04-02 20:18:56",
            "end_time": null,
            "manager": {
                "id": 47,
                "unique_id": "jj8j8UjyL2",
                "name": null,
                "username": "笹田 真綾",
                "email": "uito@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 27,
                    "unique_id": "13xF3wxebM",
                    "name": null,
                    "username": "伊藤 くみ子",
                    "email": "yamaguchi.kaori@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "adOutg3Y9D",
                    "name": null,
                    "username": "宇野 修平",
                    "email": "vyoshimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "EC5RPOwM5q",
                    "name": null,
                    "username": "三宅 晃",
                    "email": "taichi41@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 187,
            "name": "magni",
            "shop_id": "721",
            "budget": 13121,
            "actual": 4799,
            "start_time": "1997-12-06 23:48:04",
            "end_time": null,
            "manager": {
                "id": 47,
                "unique_id": "jj8j8UjyL2",
                "name": null,
                "username": "笹田 真綾",
                "email": "uito@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "MeCQa5G5zj",
                    "name": null,
                    "username": "大垣 くみ子",
                    "email": "mitsuru57@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "adOutg3Y9D",
                    "name": null,
                    "username": "宇野 修平",
                    "email": "vyoshimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 188,
            "name": "cum",
            "shop_id": "908",
            "budget": 13641,
            "actual": 4220,
            "start_time": "2005-02-12 17:24:58",
            "end_time": null,
            "manager": {
                "id": 47,
                "unique_id": "jj8j8UjyL2",
                "name": null,
                "username": "笹田 真綾",
                "email": "uito@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "EC5RPOwM5q",
                    "name": null,
                    "username": "三宅 晃",
                    "email": "taichi41@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "8YCpz0tCrp",
                    "name": null,
                    "username": "山口 京助",
                    "email": "etsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:09.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 198,
            "name": "non",
            "shop_id": "777",
            "budget": 17082,
            "actual": 8480,
            "start_time": "1982-02-15 09:53:48",
            "end_time": null,
            "manager": {
                "id": 50,
                "unique_id": "uk1h800mbN",
                "name": null,
                "username": "井上 晃",
                "email": "murayama.naoki@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "oPNVgPbi1x",
                    "name": null,
                    "username": "工藤 真綾",
                    "email": "dkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "T3OfT0HtAN",
                    "name": null,
                    "username": "工藤 陽子",
                    "email": "kenichi.yamamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "pUtIY8UCm8",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "harada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "EC5RPOwM5q",
                    "name": null,
                    "username": "三宅 晃",
                    "email": "taichi41@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 199,
            "name": "non",
            "shop_id": "959",
            "budget": 7714,
            "actual": 49895,
            "start_time": "2000-05-23 06:14:09",
            "end_time": null,
            "manager": {
                "id": 50,
                "unique_id": "uk1h800mbN",
                "name": null,
                "username": "井上 晃",
                "email": "murayama.naoki@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 5,
                    "unique_id": "GnQ7TvLmfo",
                    "name": null,
                    "username": "原田 さゆり",
                    "email": "rika.sakamoto@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "gkbXEalhCo",
                    "name": null,
                    "username": "坂本 充",
                    "email": "satomi40@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 15,
                    "unique_id": "JlkOzSIpHq",
                    "name": null,
                    "username": "吉田 直子",
                    "email": "sayuri.sasada@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "1bpMhmUjvZ",
                    "name": null,
                    "username": "宮沢 あすか",
                    "email": "kana20@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "EC5RPOwM5q",
                    "name": null,
                    "username": "三宅 晃",
                    "email": "taichi41@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 200,
            "name": "est",
            "shop_id": "161",
            "budget": 6521,
            "actual": 8686,
            "start_time": "2013-08-25 16:53:14",
            "end_time": null,
            "manager": {
                "id": 50,
                "unique_id": "uk1h800mbN",
                "name": null,
                "username": "井上 晃",
                "email": "murayama.naoki@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
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
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:21:11.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "oPNVgPbi1x",
                    "name": null,
                    "username": "工藤 真綾",
                    "email": "dkoizumi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "gkbXEalhCo",
                    "name": null,
                    "username": "坂本 充",
                    "email": "satomi40@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "pV6SElxxBq",
                    "name": null,
                    "username": "木村 智也",
                    "email": "yosuke66@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 37,
                    "unique_id": "pUtIY8UCm8",
                    "name": null,
                    "username": "坂本 裕美子",
                    "email": "harada.ryohei@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "8YCpz0tCrp",
                    "name": null,
                    "username": "山口 京助",
                    "email": "etsuda@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:21:10.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:10.000000",
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

<!-- START_f002f7656ea051619cc8b112ba27bdbd -->
## guests.sessions.show ゲストとして参加しているセッションの一つの詳細

> Example request:

```bash
curl -X GET -G "http://localhost/api/guest/sessions/{session}" 
```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

    let params = {
            "session": "4z2dYSsmoyQP1Jpe",
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
        "id": 124,
        "name": "rem",
        "shop_id": "595",
        "budget": 12533,
        "actual": 34817,
        "start_time": "2005-09-17 06:28:19",
        "end_time": null,
        "manager": {
            "id": 31,
            "unique_id": "1bpMhmUjvZ",
            "name": null,
            "username": "宮沢 あすか",
            "email": "kana20@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 44,
                "unique_id": "7MrNKirULp",
                "name": null,
                "username": "小林 稔",
                "email": "sakamoto.kenichi@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": null,
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 45,
                "unique_id": "hjDSDUZkg9",
                "name": null,
                "username": "笹田 英樹",
                "email": "yuki.tsuda@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-20 08:21:03.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:03.000000",
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

#profile プロフィール
<!-- START_083f8e6e87f50a46d0cc30956e5b0812 -->
## profiles.update 自分の情報を更新

> Example request:

```bash
curl -X PUT "http://localhost/api/profile/update" \
    -H "Content-Type: application/json" \
    -d '{"unique_id":"qfbw8aZJD4SUPHML","username":"A5UO3vMcJ7dbcdXQ","password":"mjILkK3m4pl4IKSc","unique_id_search_flag":false,"username_search_flag":true}'

```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "qfbw8aZJD4SUPHML",
    "username": "A5UO3vMcJ7dbcdXQ",
    "password": "mjILkK3m4pl4IKSc",
    "unique_id_search_flag": false,
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
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:40.000000",
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "unique_id": "oPNVgPbi1x",
            "name": null,
            "username": "工藤 真綾",
            "email": "dkoizumi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 7,
            "unique_id": "jHz5gNWBuY",
            "name": null,
            "username": "廣川 裕太",
            "email": "aota.yui@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "ZxWZSJdXBh",
            "name": null,
            "username": "小泉 くみ子",
            "email": "csakamoto@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "e6DThwehfQ",
            "name": null,
            "username": "西之園 明美",
            "email": "rei42@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "EsMWV66rCg",
            "name": null,
            "username": "廣川 春香",
            "email": "rei.sugiyama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "QnnDPJ0aYC",
            "name": null,
            "username": "喜嶋 知実",
            "email": "naoki83@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "tywjLd2S6O",
            "name": null,
            "username": "廣川 零",
            "email": "yui.ito@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "WtPLjMca99",
            "name": null,
            "username": "近藤 裕樹",
            "email": "soutaro02@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "kBLIJLPWV1",
            "name": null,
            "username": "野村 明美",
            "email": "atsushi65@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "wMkVcqDtep",
            "name": null,
            "username": "津田 翔太",
            "email": "kumiko21@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "13xF3wxebM",
            "name": null,
            "username": "伊藤 くみ子",
            "email": "yamaguchi.kaori@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "A2MnhFNYlS",
            "name": null,
            "username": "西之園 幹",
            "email": "akira.sasaki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "N0GnRDTJiQ",
            "name": null,
            "username": "山口 翔太",
            "email": "ssasada@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "T3OfT0HtAN",
            "name": null,
            "username": "工藤 陽子",
            "email": "kenichi.yamamoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "IdZpaouVoK",
            "name": null,
            "username": "喜嶋 京助",
            "email": "takuma88@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "OGBYyAZNGm",
            "name": null,
            "username": "山田 真綾",
            "email": "matsumoto.hiroshi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "pUtIY8UCm8",
            "name": null,
            "username": "坂本 裕美子",
            "email": "harada.ryohei@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "h2MRdpUe5C",
            "name": null,
            "username": "大垣 七夏",
            "email": "yuki.saito@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "vmVDZjECA5",
            "name": null,
            "username": "小泉 淳",
            "email": "nanami.kimura@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "iaE0YfW03e",
            "name": null,
            "username": "宇野 聡太郎",
            "email": "hirokawa.rei@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "7MrNKirULp",
            "name": null,
            "username": "小林 稔",
            "email": "sakamoto.kenichi@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "8YCpz0tCrp",
            "name": null,
            "username": "山口 京助",
            "email": "etsuda@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "3tkwLjHvho",
            "name": null,
            "username": "中村 浩",
            "email": "maaya03@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "uk1h800mbN",
            "name": null,
            "username": "井上 晃",
            "email": "murayama.naoki@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "unique_id": "zxguSy5oRd",
            "name": null,
            "username": "aaaa",
            "email": "FKYvuX@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-20 08:21:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "atqp2fdrCc",
            "name": null,
            "username": "aaaa",
            "email": "EgXyXEU@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-20 08:21:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 57,
            "unique_id": "O7u7UO0v2k",
            "name": null,
            "username": "aaaa",
            "email": "oDP98fgy@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-20 08:21:40.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:40.000000",
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
    -d '{"username":"u6ZFMR1gNSOe8h4j"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "u6ZFMR1gNSOe8h4j"
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
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
    -d '{"unique_id":"cgHKQAE4889pSDyY"}'

```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "cgHKQAE4889pSDyY"
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
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:11.000000",
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
    -d '{"unique_id":"CnPSSqT0MJo1tFZj"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "CnPSSqT0MJo1tFZj"
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
            "id": 30,
            "unique_id": "T3OfT0HtAN",
            "name": null,
            "username": "工藤 陽子",
            "email": "kenichi.yamamoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "tUCFq2xFYj",
            "name": null,
            "username": "伊藤 修平",
            "email": "mitsuru34@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "tWJN9edHjT",
            "name": null,
            "username": "近藤 浩",
            "email": "maaya.wakamatsu@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "tywjLd2S6O",
            "name": null,
            "username": "廣川 零",
            "email": "yui.ito@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
            "session": "8cWo7jWhCXch65cc",
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
            "unique_id": "gkbXEalhCo",
            "name": null,
            "username": "坂本 充",
            "email": "satomi40@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": null,
            "plus_minus": null,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "un6sTojKDv",
            "name": null,
            "username": "桐山 翼",
            "email": "maaya39@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "deny",
            "paid": null,
            "plus_minus": null,
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
    -d '{"user_id":"XCqcR5o4FfeelZpf","join_status":"adBCvxzHSUaf8dTX","paid":14,"plus_minus":1,"ratio":"Ew6Ub35Hc7qXf88a"}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "3d0deT7T64XDQdUY",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "XCqcR5o4FfeelZpf",
    "join_status": "adBCvxzHSUaf8dTX",
    "paid": 14,
    "plus_minus": 1,
    "ratio": "Ew6Ub35Hc7qXf88a"
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
            "id": 54,
            "unique_id": "DC4piL707r",
            "name": null,
            "username": "aaaa",
            "email": "RDwtD@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "created_at": {
                "date": "2019-02-20 08:21:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:39.000000",
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
            "session": "I9c2bajE5aPIrnoK",
            "user": "ms5bM78PootrJz44",
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
        "id": 54,
        "unique_id": "DC4piL707r",
        "name": null,
        "username": "aaaa",
        "email": "RDwtD@new.com",
        "unique_id_search_flag": 0,
        "username_search_flag": 0,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "created_at": {
            "date": "2019-02-20 08:21:39.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:39.000000",
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
    -d '{"user_id":"FUw7pI5FsNr02bmA","join_status":"vIUgY8ReLoJSBSeM","paid":9,"plus_minus":1}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "CsNXyBlHHWcXfYcx",
            "user": "UbV5kbf5P8zM39GC",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "FUw7pI5FsNr02bmA",
    "join_status": "vIUgY8ReLoJSBSeM",
    "paid": 9,
    "plus_minus": 1
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
        "id": 19,
        "unique_id": "un6sTojKDv",
        "name": null,
        "username": "桐山 翼",
        "email": "maaya39@example.org",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "created_at": {
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:20:51.000000",
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
    user_id | string |  required  | 追加するユーザーのID
    join_status | required |  optional  | integer 参加状況のステータス
    paid | integer |  optional  | 支払いしたか
    plus_minus | integer |  optional  | 加減算
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
            "session": "5WzbiFat2ittXjnV",
            "user": "7TdJsZBCrA53g52M",
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
            "name": "reprehenderit",
            "shop_id": "879",
            "budget": 15893,
            "actual": 48549,
            "start_time": "2002-08-02 11:05:40",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "ea",
            "shop_id": "301",
            "budget": 16630,
            "actual": 14766,
            "start_time": "2002-06-04 12:43:53",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 13,
                    "unique_id": "gkbXEalhCo",
                    "name": null,
                    "username": "坂本 充",
                    "email": "satomi40@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "eum",
            "shop_id": "271",
            "budget": 25344,
            "actual": 32614,
            "start_time": "1974-09-20 23:35:35",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 19,
                    "unique_id": "un6sTojKDv",
                    "name": null,
                    "username": "桐山 翼",
                    "email": "maaya39@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "tUCFq2xFYj",
                    "name": null,
                    "username": "伊藤 修平",
                    "email": "mitsuru34@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "soluta",
            "shop_id": "722",
            "budget": 26129,
            "actual": 30946,
            "start_time": "1977-10-10 14:18:13",
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
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:21:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 10,
                    "unique_id": "FHDSwupeNM",
                    "name": null,
                    "username": "井上 春香",
                    "email": "takuma18@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "tUCFq2xFYj",
                    "name": null,
                    "username": "伊藤 修平",
                    "email": "mitsuru34@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": null,
                    "plus_minus": null,
                    "created_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-20 08:20:51.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:20:51.000000",
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
    -d '{"name":"pmk9s3TiMOfhV8ld","shop_id":"1PhLgYWCAEUr0wtZ","budget":10,"actual":6,"start_time":"KnqH3OzcsEfKRgMo","end_time":"nR3G5Nz4BFNCJKau"}'

```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "pmk9s3TiMOfhV8ld",
    "shop_id": "1PhLgYWCAEUr0wtZ",
    "budget": 10,
    "actual": 6,
    "start_time": "KnqH3OzcsEfKRgMo",
    "end_time": "nR3G5Nz4BFNCJKau"
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
        "name": "newSessionwA4mM",
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-02-20 08:21:40.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:21:40.000000",
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
            "session": "xDMLq2KWo2XLcba7",
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
        "name": "reprehenderit",
        "shop_id": "879",
        "budget": 15893,
        "actual": 48549,
        "start_time": "2002-08-02 11:05:40",
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 19,
                "unique_id": "un6sTojKDv",
                "name": null,
                "username": "桐山 翼",
                "email": "maaya39@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-20 08:20:51.000000",
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
    -d '{"name":"55J7qb57vOmlnh09","shop_id":3,"budget":11,"actual":13,"start_time":"9ezvvOHrbTQ5RPog","end_time":"a0k4qo3U3cYbUM0D"}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "9DiO9v3BHg8PoPhe",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "55J7qb57vOmlnh09",
    "shop_id": 3,
    "budget": 11,
    "actual": 13,
    "start_time": "9ezvvOHrbTQ5RPog",
    "end_time": "a0k4qo3U3cYbUM0D"
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
        "name": "reprehenderit",
        "shop_id": "879",
        "budget": 29999,
        "actual": 48549,
        "start_time": "2002-08-02 11:05:40",
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
                "date": "2019-02-20 08:20:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-20 08:21:11.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 19,
                "unique_id": "un6sTojKDv",
                "name": null,
                "username": "桐山 翼",
                "email": "maaya39@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": null,
                "plus_minus": null,
                "created_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-20 08:20:51.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-20 08:20:51.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-21 00:31:09.000000",
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
            "session": "uefMb9Drcng72Ig2",
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


