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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "aut",
            "plus_minus": 2312,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "sed",
            "plus_minus": 180,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "delectus",
            "plus_minus": 2084,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nulla",
            "plus_minus": -2780,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "neque",
            "plus_minus": 9,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
    -d '{"name":"bjBSD1PKMLuWQWcw","plus_minus":4}'

```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "bjBSD1PKMLuWQWcw",
    "plus_minus": 4
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "attributenameaWPYg",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-24 07:50:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:31.000000",
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
            "attribute": "xbEGMt6ONTNH7Rdy",
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "neque",
        "plus_minus": 9,
        "created_at": {
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:06.000000",
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
    -d '{"name":"leBewAMiNYxWrVBp","plus_minus":20}'

```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "vQhyv36eaxZe3qP3",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "leBewAMiNYxWrVBp",
    "plus_minus": 20
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "updateGKnbP",
        "plus_minus": null,
        "created_at": {
            "date": "2019-02-24 07:50:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:31.000000",
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
            "attribute": "LkypFJMur4Zmwgnf",
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
    -d '{"email":"8B1MFBbiIe5dx0oJ","username":"UdEIdolYEhD8jdzY","password":"jwoAwxj9aQToYZrr"}'

```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "8B1MFBbiIe5dx0oJ",
    "username": "UdEIdolYEhD8jdzY",
    "password": "jwoAwxj9aQToYZrr"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTA5OTQ2MzEsImV4cCI6MTU1MDk5ODIzMSwibmJmIjoxNTUwOTk0NjMxLCJqdGkiOiJOY3JqclhsWFBsZFZobVJlIiwic3ViIjo1MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.waII4D96tk7nyNqZAw897Ck1ZHG5jr5sM8i85Rl9WZQ",
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
    -d '{"email":"FQtz6QcbiofqzqGv","password":"iUJAyUL4bKWevByh"}'

```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "FQtz6QcbiofqzqGv",
    "password": "iUJAyUL4bKWevByh"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTA5OTQ2MzMsImV4cCI6MTU1MDk5ODIzMywibmJmIjoxNTUwOTk0NjMzLCJqdGkiOiI2TjdNQ1o5TGxEN016N2FPIiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.QkDHwEPjfr324eO5xfKIzAe-Z26SqNSKcWDUI_EAVeg",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MDk5NDYzMSwiZXhwIjoxNTUwOTk4MjMxLCJuYmYiOjE1NTA5OTQ2MzEsImp0aSI6IlFjbHh5dnd0eGtTaEZ2V3YiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.MlUGDcOtABHpmXA9i4ovdpMGMSIb0OfIILBCq7GNZI8",
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
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:28.000000",
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
    -d '{"email":"f3OWS1wlQlEzKmoA","password":"2EbHAR3AssE3jTd3"}'

```

```javascript
const url = new URL("http://localhost/api/admin/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "f3OWS1wlQlEzKmoA",
    "password": "2EbHAR3AssE3jTd3"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTA5OTQ2MzMsImV4cCI6MTU1MDk5ODIzMywibmJmIjoxNTUwOTk0NjMzLCJqdGkiOiI2TjdNQ1o5TGxEN016N2FPIiwic3ViIjoyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.QkDHwEPjfr324eO5xfKIzAe-Z26SqNSKcWDUI_EAVeg",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "urjRQJ6",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "officiis",
                "users": [
                    {
                        "id": 9,
                        "unique_id": "PSQfSFGyRP",
                        "name": null,
                        "username": "渡辺 洋介",
                        "email": "mmiyake@example.net",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-24 07:50:06.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-24 07:50:06.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 39,
                        "unique_id": "1arPPlr25i",
                        "name": null,
                        "username": "浜田 康弘",
                        "email": "kazuya.hirokawa@example.org",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-02-24 07:50:06.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                            "date": "2019-02-24 07:50:06.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "deleted_at": null
                    }
                ],
                "created_at": {
                    "date": "2019-02-24 07:50:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
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
    -d '{"name":"bX0gH2vfklKcn7Xp","current_location_flag":true,"latitude":"AqAu80QYxtBviW2g","longitude":"A0SOuLNHQtoIBbw1","timer":4,"group_id":11}'

```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "bX0gH2vfklKcn7Xp",
    "current_location_flag": true,
    "latitude": "AqAu80QYxtBviW2g",
    "longitude": "A0SOuLNHQtoIBbw1",
    "timer": 4,
    "group_id": 11
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "urjRQJ6",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nisi",
            "users": [
                {
                    "id": 13,
                    "unique_id": "rmV89NWtAo",
                    "name": null,
                    "username": "小泉 治",
                    "email": "atsushi09@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-24 07:50:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:31.000000",
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
            "default_setting": "EbNvMri4jD4cbZGd",
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "urjRQJ6",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "officiis",
            "users": [
                {
                    "id": 9,
                    "unique_id": "PSQfSFGyRP",
                    "name": null,
                    "username": "渡辺 洋介",
                    "email": "mmiyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "1arPPlr25i",
                    "name": null,
                    "username": "浜田 康弘",
                    "email": "kazuya.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-24 07:50:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:07.000000",
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
    -d '{"name":"oJl0WtcN3i6xVcL7","current_location_flag":true,"latitude":"9Jn5QS25hvLuKAJr","longitude":"NBO7wwBHidp1qkdm","timer":20,"group_id":2}'

```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "a528rAEnnfaQKT7d",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "oJl0WtcN3i6xVcL7",
    "current_location_flag": true,
    "latitude": "9Jn5QS25hvLuKAJr",
    "longitude": "NBO7wwBHidp1qkdm",
    "timer": 20,
    "group_id": 2
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newSettingsfODPA5ii",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "qui",
            "users": [
                {
                    "id": 7,
                    "unique_id": "6miWZXTmTP",
                    "name": null,
                    "username": "加納 充",
                    "email": "momoko11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-24 07:50:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:31.000000",
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
            "default_setting": "FJ5l6CboEACH4HY9",
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
            "id": 7,
            "unique_id": "6miWZXTmTP",
            "name": null,
            "username": "加納 充",
            "email": "momoko11@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nulla",
                "plus_minus": -2780,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "PSQfSFGyRP",
            "name": null,
            "username": "渡辺 洋介",
            "email": "mmiyake@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "rmV89NWtAo",
            "name": null,
            "username": "小泉 治",
            "email": "atsushi09@example.com",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "RuGrr2PDE9",
            "name": null,
            "username": "佐々木 直子",
            "email": "yui.wakamatsu@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nulla",
                "plus_minus": -2780,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "cDaYaDdT58",
            "name": null,
            "username": "藤本 裕太",
            "email": "takahashi.ryosuke@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "b8UmI45yXE",
            "name": null,
            "username": "大垣 裕太",
            "email": "sato.kumiko@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "neque",
                "plus_minus": 9,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "1arPPlr25i",
            "name": null,
            "username": "浜田 康弘",
            "email": "kazuya.hirokawa@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "HJfNAkxhwQ",
            "name": null,
            "username": "佐藤 直子",
            "email": "ekoda.haruka@example.com",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "neque",
                "plus_minus": 9,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
    -d '{"email":"6n42OmWmyFLmu1kg"}'

```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "6n42OmWmyFLmu1kg"
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
        "date": "2019-02-24 07:50:06.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
        "date": "2019-02-24 07:50:28.000000",
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
            "id": 10,
            "unique_id": "gN2QQlBx2f",
            "name": null,
            "username": "笹田 健一",
            "email": "yuki.ekoda@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 48,
                "manager": {
                    "id": 10,
                    "unique_id": "gN2QQlBx2f",
                    "name": null,
                    "username": "笹田 健一",
                    "email": "yuki.ekoda@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "molestiae",
                "plus_minus": -144,
                "created_at": {
                    "date": "2019-02-24 07:50:10.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:10.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "TMYsIYrVXN",
            "name": null,
            "username": "廣川 直樹",
            "email": "pkobayashi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 54,
                "manager": {
                    "id": 11,
                    "unique_id": "TMYsIYrVXN",
                    "name": null,
                    "username": "廣川 直樹",
                    "email": "pkobayashi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "ad",
                "plus_minus": -1595,
                "created_at": {
                    "date": "2019-02-24 07:50:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:11.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "eU7cUtYPe7",
            "name": null,
            "username": "渚 知実",
            "email": "kanou.mitsuru@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 72,
                "manager": {
                    "id": 15,
                    "unique_id": "eU7cUtYPe7",
                    "name": null,
                    "username": "渚 知実",
                    "email": "kanou.mitsuru@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "commodi",
                "plus_minus": 2601,
                "created_at": {
                    "date": "2019-02-24 07:50:13.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:13.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "8wEwQUanNY",
            "name": null,
            "username": "野村 直子",
            "email": "yui53@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 90,
                "manager": {
                    "id": 18,
                    "unique_id": "8wEwQUanNY",
                    "name": null,
                    "username": "野村 直子",
                    "email": "yui53@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": -2838,
                "created_at": {
                    "date": "2019-02-24 07:50:14.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:14.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "0x8CqbI7fO",
            "name": null,
            "username": "浜田 太一",
            "email": "nakatsugawa.hanako@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 111,
                "manager": {
                    "id": 23,
                    "unique_id": "0x8CqbI7fO",
                    "name": null,
                    "username": "浜田 太一",
                    "email": "nakatsugawa.hanako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "porro",
                "plus_minus": -1248,
                "created_at": {
                    "date": "2019-02-24 07:50:16.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:16.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "qJa04IDO9c",
            "name": null,
            "username": "江古田 陽一",
            "email": "xfujimoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 176,
                "manager": {
                    "id": 36,
                    "unique_id": "qJa04IDO9c",
                    "name": null,
                    "username": "江古田 陽一",
                    "email": "xfujimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "enim",
                "plus_minus": 2131,
                "created_at": {
                    "date": "2019-02-24 07:50:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "l1P1vOlmAx",
            "name": null,
            "username": "坂本 香織",
            "email": "aoyama.yui@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 222,
                "manager": {
                    "id": 45,
                    "unique_id": "l1P1vOlmAx",
                    "name": null,
                    "username": "坂本 香織",
                    "email": "aoyama.yui@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolor",
                "plus_minus": 227,
                "created_at": {
                    "date": "2019-02-24 07:50:26.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:26.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "GPdcMD2lAg",
            "name": null,
            "username": "笹田 知実",
            "email": "dkiriyama@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 232,
                "manager": {
                    "id": 47,
                    "unique_id": "GPdcMD2lAg",
                    "name": null,
                    "username": "笹田 知実",
                    "email": "dkiriyama@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consectetur",
                "plus_minus": -2979,
                "created_at": {
                    "date": "2019-02-24 07:50:27.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:27.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "g3atgvuAIm",
            "name": null,
            "username": "江古田 明美",
            "email": "kaori.idaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 248,
                "manager": {
                    "id": 50,
                    "unique_id": "g3atgvuAIm",
                    "name": null,
                    "username": "江古田 明美",
                    "email": "kaori.idaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "officia",
                "plus_minus": 493,
                "created_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
            "id": 14,
            "unique_id": "FlREMVun80",
            "name": null,
            "username": "吉本 智也",
            "email": "ryosuke.sasaki@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "delectus",
                "plus_minus": 2084,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "mFS6Zt8N7w",
            "name": null,
            "username": "宮沢 亮介",
            "email": "fujimoto.tsubasa@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "sed",
                "plus_minus": 180,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "vqtuSvIHnJ",
            "name": null,
            "username": "井上 くみ子",
            "email": "kijima.akira@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "neque",
                "plus_minus": 9,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "hWdNhoHodE",
            "name": null,
            "username": "鈴木 春香",
            "email": "ohamada@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "delectus",
                "plus_minus": 2084,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "CmERYdJAQb",
            "name": null,
            "username": "石田 零",
            "email": "mai.takahashi@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "sed",
                "plus_minus": 180,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "ltojT73jzB",
            "name": null,
            "username": "廣川 直子",
            "email": "rei31@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nulla",
                "plus_minus": -2780,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "qJa04IDO9c",
            "name": null,
            "username": "江古田 陽一",
            "email": "xfujimoto@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nulla",
                "plus_minus": -2780,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "C0vaWrHL65",
            "name": null,
            "username": "渚 さゆり",
            "email": "naoki77@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
            "id": 3,
            "unique_id": "Ce5Gvdv3u4",
            "name": null,
            "username": "原田 直人",
            "email": "rika73@example.com",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "sed",
                "plus_minus": 180,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "unique_id": "XDXqmWdZTp",
            "name": null,
            "username": "渡辺 知実",
            "email": "osamu48@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "neque",
                "plus_minus": 9,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "J63Yo17sv0",
            "name": null,
            "username": "近藤 稔",
            "email": "xnakatsugawa@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nulla",
                "plus_minus": -2780,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "8wEwQUanNY",
            "name": null,
            "username": "野村 直子",
            "email": "yui53@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "delectus",
                "plus_minus": 2084,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "0x8CqbI7fO",
            "name": null,
            "username": "浜田 太一",
            "email": "nakatsugawa.hanako@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "neque",
                "plus_minus": 9,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "q7AooPtlBh",
            "name": null,
            "username": "笹田 学",
            "email": "watanabe.naoto@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nulla",
                "plus_minus": -2780,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "xOYgoGmNlf",
            "name": null,
            "username": "高橋 裕樹",
            "email": "csasaki@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nulla",
                "plus_minus": -2780,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "97g8VfAtcv",
            "name": null,
            "username": "近藤 結衣",
            "email": "miyazawa.ryosuke@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "neque",
                "plus_minus": 9,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "l1P1vOlmAx",
            "name": null,
            "username": "坂本 香織",
            "email": "aoyama.yui@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "unique_id": "yvGRzQMt2K",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 07:50:31.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:31.000000",
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
            "unique_id": "XDXqmWdZTp",
            "name": null,
            "username": "渡辺 知実",
            "email": "osamu48@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 25,
                "manager": {
                    "id": 5,
                    "unique_id": "XDXqmWdZTp",
                    "name": null,
                    "username": "渡辺 知実",
                    "email": "osamu48@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "sit",
                "plus_minus": -2304,
                "created_at": {
                    "date": "2019-02-24 07:50:08.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:08.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "BR2w5WnVeY",
            "name": null,
            "username": "江古田 里佳",
            "email": "satomi65@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 139,
                "manager": {
                    "id": 28,
                    "unique_id": "BR2w5WnVeY",
                    "name": null,
                    "username": "江古田 里佳",
                    "email": "satomi65@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quia",
                "plus_minus": -2112,
                "created_at": {
                    "date": "2019-02-24 07:50:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:18.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "q7AooPtlBh",
            "name": null,
            "username": "笹田 学",
            "email": "watanabe.naoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 143,
                "manager": {
                    "id": 29,
                    "unique_id": "q7AooPtlBh",
                    "name": null,
                    "username": "笹田 学",
                    "email": "watanabe.naoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": -885,
                "created_at": {
                    "date": "2019-02-24 07:50:19.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:19.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "b8UmI45yXE",
            "name": null,
            "username": "大垣 裕太",
            "email": "sato.kumiko@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 164,
                "manager": {
                    "id": 33,
                    "unique_id": "b8UmI45yXE",
                    "name": null,
                    "username": "大垣 裕太",
                    "email": "sato.kumiko@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "consequatur",
                "plus_minus": 1351,
                "created_at": {
                    "date": "2019-02-24 07:50:20.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:20.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "75cDOB39xx",
            "name": null,
            "username": "青田 裕美子",
            "email": "gishida@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 174,
                "manager": {
                    "id": 35,
                    "unique_id": "75cDOB39xx",
                    "name": null,
                    "username": "青田 裕美子",
                    "email": "gishida@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "perferendis",
                "plus_minus": -2272,
                "created_at": {
                    "date": "2019-02-24 07:50:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "suhmvD1dFp",
            "name": null,
            "username": "加藤 七夏",
            "email": "tharada@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 204,
                "manager": {
                    "id": 41,
                    "unique_id": "suhmvD1dFp",
                    "name": null,
                    "username": "加藤 七夏",
                    "email": "tharada@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "vero",
                "plus_minus": 1569,
                "created_at": {
                    "date": "2019-02-24 07:50:24.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:24.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
            "unique_id": "Ce5Gvdv3u4",
            "name": null,
            "username": "原田 直人",
            "email": "rika73@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 15,
                "manager": {
                    "id": 3,
                    "unique_id": "Ce5Gvdv3u4",
                    "name": null,
                    "username": "原田 直人",
                    "email": "rika73@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "odit",
                "plus_minus": 2729,
                "created_at": {
                    "date": "2019-02-24 07:50:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:07.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "h4P5xu1wox",
            "name": null,
            "username": "浜田 亮介",
            "email": "asugiyama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 27,
                "manager": {
                    "id": 6,
                    "unique_id": "h4P5xu1wox",
                    "name": null,
                    "username": "浜田 亮介",
                    "email": "asugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "cum",
                "plus_minus": -1835,
                "created_at": {
                    "date": "2019-02-24 07:50:09.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:09.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 7,
            "unique_id": "6miWZXTmTP",
            "name": null,
            "username": "加納 充",
            "email": "momoko11@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 35,
                "manager": {
                    "id": 7,
                    "unique_id": "6miWZXTmTP",
                    "name": null,
                    "username": "加納 充",
                    "email": "momoko11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "iusto",
                "plus_minus": 1596,
                "created_at": {
                    "date": "2019-02-24 07:50:09.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:09.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "rmV89NWtAo",
            "name": null,
            "username": "小泉 治",
            "email": "atsushi09@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 63,
                "manager": {
                    "id": 13,
                    "unique_id": "rmV89NWtAo",
                    "name": null,
                    "username": "小泉 治",
                    "email": "atsushi09@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "dolore",
                "plus_minus": 2245,
                "created_at": {
                    "date": "2019-02-24 07:50:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "FlREMVun80",
            "name": null,
            "username": "吉本 智也",
            "email": "ryosuke.sasaki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 69,
                "manager": {
                    "id": 14,
                    "unique_id": "FlREMVun80",
                    "name": null,
                    "username": "吉本 智也",
                    "email": "ryosuke.sasaki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "et",
                "plus_minus": -1771,
                "created_at": {
                    "date": "2019-02-24 07:50:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:12.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "vqtuSvIHnJ",
            "name": null,
            "username": "井上 くみ子",
            "email": "kijima.akira@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 96,
                "manager": {
                    "id": 20,
                    "unique_id": "vqtuSvIHnJ",
                    "name": null,
                    "username": "井上 くみ子",
                    "email": "kijima.akira@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "laborum",
                "plus_minus": 2222,
                "created_at": {
                    "date": "2019-02-24 07:50:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:15.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "RuGrr2PDE9",
            "name": null,
            "username": "佐々木 直子",
            "email": "yui.wakamatsu@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 106,
                "manager": {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quaerat",
                "plus_minus": 1297,
                "created_at": {
                    "date": "2019-02-24 07:50:16.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:16.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "cDaYaDdT58",
            "name": null,
            "username": "藤本 裕太",
            "email": "takahashi.ryosuke@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 153,
                "manager": {
                    "id": 31,
                    "unique_id": "cDaYaDdT58",
                    "name": null,
                    "username": "藤本 裕太",
                    "email": "takahashi.ryosuke@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "qui",
                "plus_minus": -1832,
                "created_at": {
                    "date": "2019-02-24 07:50:19.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:19.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "cNZTcPYdTg",
            "name": null,
            "username": "山田 京助",
            "email": "osamu38@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 167,
                "manager": {
                    "id": 34,
                    "unique_id": "cNZTcPYdTg",
                    "name": null,
                    "username": "山田 京助",
                    "email": "osamu38@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "maxime",
                "plus_minus": 1207,
                "created_at": {
                    "date": "2019-02-24 07:50:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:21.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "EKLjNv8Oah",
            "name": null,
            "username": "工藤 淳",
            "email": "chiyo57@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 227,
                "manager": {
                    "id": 46,
                    "unique_id": "EKLjNv8Oah",
                    "name": null,
                    "username": "工藤 淳",
                    "email": "chiyo57@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "provident",
                "plus_minus": -2631,
                "created_at": {
                    "date": "2019-02-24 07:50:26.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:26.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "C0vaWrHL65",
            "name": null,
            "username": "渚 さゆり",
            "email": "naoki77@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 244,
                "manager": {
                    "id": 49,
                    "unique_id": "C0vaWrHL65",
                    "name": null,
                    "username": "渚 さゆり",
                    "email": "naoki77@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "doloribus",
                "plus_minus": -2086,
                "created_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
    -d '{"user_id":3}'

```

```javascript
const url = new URL("http://localhost/api/friends/permit");

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
    -d '{"user_id":9}'

```

```javascript
const url = new URL("http://localhost/api/friends/reject");

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
    -d '{"attribute_id":15}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "nkFZpQXqKaa29skG",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 15
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
    -d '{"attribute_id":3}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "GNrZAzYQhVBQEa0J",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 3
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
            "friend": "Ptf6LMQnTynV76Ne",
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
            "friend": "sqWZME97bsu0tguh",
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
            "friend": "MZkLKWAgKuA5yU2K",
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
            "friend": "n4TnljRAv3omMxii",
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
        "id": 22,
        "unique_id": "RuGrr2PDE9",
        "name": null,
        "username": "佐々木 直子",
        "email": "yui.wakamatsu@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "permitted": 1,
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nulla",
            "plus_minus": -2780,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:06.000000",
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
            "friend": "yBg74wpiswoqxpFU",
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
    -d '{"device_token":"lFqSD4JrbTRmlEQl"}'

```

```javascript
const url = new URL("http://localhost/api/device_token");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "device_token": "lFqSD4JrbTRmlEQl"
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "device_token": "newTokenq1ZiPptN7vmLLlVSN2GZ",
        "created_at": {
            "date": "2019-02-24 07:50:31.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:31.000000",
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
            "group": "CKEck1N6hcG3jwzK",
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
curl -X POST "http://localhost/api/groups/{group}/users" \
    -H "Content-Type: application/json" \
    -d '{"user_id":14}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "zwBJUmfpFoY2LhVB",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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
            "group": "btXpRgQvCiCOrgTg",
            "user": "NGRGIdJWYAFwORbD",
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
        "unique_id": "rmV89NWtAo",
        "name": null,
        "username": "小泉 治",
        "email": "atsushi09@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:06.000000",
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
            "group": "X2LEzOA86V5IVu4z",
            "user": "nDss5hbxGF49Vqp4",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "qui",
            "users": [
                {
                    "id": 7,
                    "unique_id": "6miWZXTmTP",
                    "name": null,
                    "username": "加納 充",
                    "email": "momoko11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "nisi",
            "users": [
                {
                    "id": 13,
                    "unique_id": "rmV89NWtAo",
                    "name": null,
                    "username": "小泉 治",
                    "email": "atsushi09@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "officiis",
            "users": [
                {
                    "id": 9,
                    "unique_id": "PSQfSFGyRP",
                    "name": null,
                    "username": "渡辺 洋介",
                    "email": "mmiyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "1arPPlr25i",
                    "name": null,
                    "username": "浜田 康弘",
                    "email": "kazuya.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "omnis",
            "users": [
                {
                    "id": 13,
                    "unique_id": "rmV89NWtAo",
                    "name": null,
                    "username": "小泉 治",
                    "email": "atsushi09@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "1arPPlr25i",
                    "name": null,
                    "username": "浜田 康弘",
                    "email": "kazuya.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "name": "explicabo",
            "users": [
                {
                    "id": 7,
                    "unique_id": "6miWZXTmTP",
                    "name": null,
                    "username": "加納 充",
                    "email": "momoko11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
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
    -d '{"name":"IROQuI5diKax3pWi"}'

```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "IROQuI5diKax3pWi"
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newGroup9Lxdg",
        "users": [],
        "created_at": {
            "date": "2019-02-24 07:50:32.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:32.000000",
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
            "group": "wBCUU0Yt24RVdXrF",
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newGroup9Lxdg",
        "users": [],
        "created_at": {
            "date": "2019-02-24 07:50:32.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:32.000000",
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
    -d '{"name":"KoyF5KXpNUVHiBuD"}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "AoKhTADJYaHAzLqi",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "KoyF5KXpNUVHiBuD"
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "name": "newGroupP570K0Gf",
        "users": [
            {
                "id": 13,
                "unique_id": "rmV89NWtAo",
                "name": null,
                "username": "小泉 治",
                "email": "atsushi09@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 39,
                "unique_id": "1arPPlr25i",
                "name": null,
                "username": "浜田 康弘",
                "email": "kazuya.hirokawa@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-24 07:50:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:32.000000",
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
            "group": "CuERsj83HVbpvWJg",
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
            "group": "tGNnN1t79fXppEjk",
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
            "id": 7,
            "unique_id": "6miWZXTmTP",
            "name": null,
            "username": "加納 充",
            "email": "momoko11@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "nulla",
                "plus_minus": -2780,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "PSQfSFGyRP",
            "name": null,
            "username": "渡辺 洋介",
            "email": "mmiyake@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "0x8CqbI7fO",
            "name": null,
            "username": "浜田 太一",
            "email": "nakatsugawa.hanako@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "neque",
                "plus_minus": 9,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "cDaYaDdT58",
            "name": null,
            "username": "藤本 裕太",
            "email": "takahashi.ryosuke@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "1arPPlr25i",
            "name": null,
            "username": "浜田 康弘",
            "email": "kazuya.hirokawa@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "HJfNAkxhwQ",
            "name": null,
            "username": "佐藤 直子",
            "email": "ekoda.haruka@example.com",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "neque",
                "plus_minus": 9,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "XwCWQuKFZC",
            "name": null,
            "username": "aaaa",
            "email": "fGUlb@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 07:50:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:32.000000",
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
            "id": 110,
            "name": "a",
            "shop_id": "J001177654",
            "budget": 7567,
            "actual": 5386,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 28,
                "unique_id": "BR2w5WnVeY",
                "name": null,
                "username": "江古田 里佳",
                "email": "satomi65@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rmV89NWtAo",
                    "name": null,
                    "username": "小泉 治",
                    "email": "atsushi09@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "75cDOB39xx",
                    "name": null,
                    "username": "青田 裕美子",
                    "email": "gishida@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "HJfNAkxhwQ",
                    "name": null,
                    "username": "佐藤 直子",
                    "email": "ekoda.haruka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 111,
            "name": "amet",
            "shop_id": "J000753015",
            "budget": 17790,
            "actual": 40919,
            "start_time": "2019-02-14 07:50:18",
            "end_time": "2019-02-19 07:50:18",
            "manager": {
                "id": 28,
                "unique_id": "BR2w5WnVeY",
                "name": null,
                "username": "江古田 里佳",
                "email": "satomi65@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "Ly5cBmxOZU",
                    "name": null,
                    "username": "井高 修平",
                    "email": "tnomura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "75cDOB39xx",
                    "name": null,
                    "username": "青田 裕美子",
                    "email": "gishida@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "qJa04IDO9c",
                    "name": null,
                    "username": "江古田 陽一",
                    "email": "xfujimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 113,
            "name": "facilis",
            "shop_id": "J001006387",
            "budget": 1247,
            "actual": 31029,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 29,
                "unique_id": "q7AooPtlBh",
                "name": null,
                "username": "笹田 学",
                "email": "watanabe.naoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "75cDOB39xx",
                    "name": null,
                    "username": "青田 裕美子",
                    "email": "gishida@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 114,
            "name": "ex",
            "shop_id": "J001177654",
            "budget": 7621,
            "actual": 23063,
            "start_time": "2019-02-19 07:50:19",
            "end_time": "2019-03-06 07:50:19",
            "manager": {
                "id": 29,
                "unique_id": "q7AooPtlBh",
                "name": null,
                "username": "笹田 学",
                "email": "watanabe.naoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 115,
            "name": "voluptas",
            "shop_id": "J001177654",
            "budget": 22342,
            "actual": 47470,
            "start_time": "2019-03-01 07:50:19",
            "end_time": "2019-03-06 07:50:19",
            "manager": {
                "id": 29,
                "unique_id": "q7AooPtlBh",
                "name": null,
                "username": "笹田 学",
                "email": "watanabe.naoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 129,
            "name": "eum",
            "shop_id": "J001177654",
            "budget": 15092,
            "actual": 39041,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 33,
                "unique_id": "b8UmI45yXE",
                "name": null,
                "username": "大垣 裕太",
                "email": "sato.kumiko@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "h4P5xu1wox",
                    "name": null,
                    "username": "浜田 亮介",
                    "email": "asugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 130,
            "name": "omnis",
            "shop_id": "J001182216",
            "budget": 3977,
            "actual": 6343,
            "start_time": "2019-03-01 07:50:21",
            "end_time": "2019-03-06 07:50:21",
            "manager": {
                "id": 33,
                "unique_id": "b8UmI45yXE",
                "name": null,
                "username": "大垣 裕太",
                "email": "sato.kumiko@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "h4P5xu1wox",
                    "name": null,
                    "username": "浜田 亮介",
                    "email": "asugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "YiierdnUXs",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "nomura.nanami@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 131,
            "name": "dicta",
            "shop_id": "J000766202",
            "budget": 9774,
            "actual": 6929,
            "start_time": "2019-03-01 07:50:21",
            "end_time": "2019-03-06 07:50:21",
            "manager": {
                "id": 33,
                "unique_id": "b8UmI45yXE",
                "name": null,
                "username": "大垣 裕太",
                "email": "sato.kumiko@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "CmERYdJAQb",
                    "name": null,
                    "username": "石田 零",
                    "email": "mai.takahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 132,
            "name": "accusamus",
            "shop_id": "J001125885",
            "budget": 9926,
            "actual": 34037,
            "start_time": "2019-02-14 07:50:21",
            "end_time": "2019-02-19 07:50:21",
            "manager": {
                "id": 33,
                "unique_id": "b8UmI45yXE",
                "name": null,
                "username": "大垣 裕太",
                "email": "sato.kumiko@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "h4P5xu1wox",
                    "name": null,
                    "username": "浜田 亮介",
                    "email": "asugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 138,
            "name": "velit",
            "shop_id": "J000753015",
            "budget": 1250,
            "actual": 33406,
            "start_time": "2019-02-14 07:50:22",
            "end_time": "2019-02-19 07:50:22",
            "manager": {
                "id": 35,
                "unique_id": "75cDOB39xx",
                "name": null,
                "username": "青田 裕美子",
                "email": "gishida@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "Ce5Gvdv3u4",
                    "name": null,
                    "username": "原田 直人",
                    "email": "rika73@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "J63Yo17sv0",
                    "name": null,
                    "username": "近藤 稔",
                    "email": "xnakatsugawa@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "0bo4xXeSST",
                    "name": null,
                    "username": "西之園 充",
                    "email": "ekoda.jun@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 163,
            "name": "ullam",
            "shop_id": "J000753015",
            "budget": 3420,
            "actual": 10417,
            "start_time": "2019-02-19 07:50:24",
            "end_time": "2019-03-06 07:50:24",
            "manager": {
                "id": 41,
                "unique_id": "suhmvD1dFp",
                "name": null,
                "username": "加藤 七夏",
                "email": "tharada@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "ANOOxwZEOD",
                    "name": null,
                    "username": "斉藤 明美",
                    "email": "sayuri16@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "gN2QQlBx2f",
                    "name": null,
                    "username": "笹田 健一",
                    "email": "yuki.ekoda@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "ltojT73jzB",
                    "name": null,
                    "username": "廣川 直子",
                    "email": "rei31@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 164,
            "name": "ipsa",
            "shop_id": "J000449898",
            "budget": 26035,
            "actual": 8734,
            "start_time": "2019-02-19 07:50:24",
            "end_time": "2019-03-06 07:50:24",
            "manager": {
                "id": 41,
                "unique_id": "suhmvD1dFp",
                "name": null,
                "username": "加藤 七夏",
                "email": "tharada@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "ANOOxwZEOD",
                    "name": null,
                    "username": "斉藤 明美",
                    "email": "sayuri16@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "Ly5cBmxOZU",
                    "name": null,
                    "username": "井高 修平",
                    "email": "tnomura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:24.000000",
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
            "id": 114,
            "name": "ex",
            "shop_id": "J001177654",
            "budget": 7621,
            "actual": 23063,
            "start_time": "2019-02-19 07:50:19",
            "end_time": "2019-03-06 07:50:19",
            "manager": {
                "id": 29,
                "unique_id": "q7AooPtlBh",
                "name": null,
                "username": "笹田 学",
                "email": "watanabe.naoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 132,
            "name": "accusamus",
            "shop_id": "J001125885",
            "budget": 9926,
            "actual": 34037,
            "start_time": "2019-02-14 07:50:21",
            "end_time": "2019-02-19 07:50:21",
            "manager": {
                "id": 33,
                "unique_id": "b8UmI45yXE",
                "name": null,
                "username": "大垣 裕太",
                "email": "sato.kumiko@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "h4P5xu1wox",
                    "name": null,
                    "username": "浜田 亮介",
                    "email": "asugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:21.000000",
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
            "id": 110,
            "name": "a",
            "shop_id": "J001177654",
            "budget": 7567,
            "actual": 5386,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 28,
                "unique_id": "BR2w5WnVeY",
                "name": null,
                "username": "江古田 里佳",
                "email": "satomi65@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rmV89NWtAo",
                    "name": null,
                    "username": "小泉 治",
                    "email": "atsushi09@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "75cDOB39xx",
                    "name": null,
                    "username": "青田 裕美子",
                    "email": "gishida@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "HJfNAkxhwQ",
                    "name": null,
                    "username": "佐藤 直子",
                    "email": "ekoda.haruka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 111,
            "name": "amet",
            "shop_id": "J000753015",
            "budget": 17790,
            "actual": 40919,
            "start_time": "2019-02-14 07:50:18",
            "end_time": "2019-02-19 07:50:18",
            "manager": {
                "id": 28,
                "unique_id": "BR2w5WnVeY",
                "name": null,
                "username": "江古田 里佳",
                "email": "satomi65@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "Ly5cBmxOZU",
                    "name": null,
                    "username": "井高 修平",
                    "email": "tnomura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "75cDOB39xx",
                    "name": null,
                    "username": "青田 裕美子",
                    "email": "gishida@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "qJa04IDO9c",
                    "name": null,
                    "username": "江古田 陽一",
                    "email": "xfujimoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 130,
            "name": "omnis",
            "shop_id": "J001182216",
            "budget": 3977,
            "actual": 6343,
            "start_time": "2019-03-01 07:50:21",
            "end_time": "2019-03-06 07:50:21",
            "manager": {
                "id": 33,
                "unique_id": "b8UmI45yXE",
                "name": null,
                "username": "大垣 裕太",
                "email": "sato.kumiko@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "h4P5xu1wox",
                    "name": null,
                    "username": "浜田 亮介",
                    "email": "asugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "YiierdnUXs",
                    "name": null,
                    "username": "佐藤 翔太",
                    "email": "nomura.nanami@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 131,
            "name": "dicta",
            "shop_id": "J000766202",
            "budget": 9774,
            "actual": 6929,
            "start_time": "2019-03-01 07:50:21",
            "end_time": "2019-03-06 07:50:21",
            "manager": {
                "id": 33,
                "unique_id": "b8UmI45yXE",
                "name": null,
                "username": "大垣 裕太",
                "email": "sato.kumiko@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "CmERYdJAQb",
                    "name": null,
                    "username": "石田 零",
                    "email": "mai.takahashi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 163,
            "name": "ullam",
            "shop_id": "J000753015",
            "budget": 3420,
            "actual": 10417,
            "start_time": "2019-02-19 07:50:24",
            "end_time": "2019-03-06 07:50:24",
            "manager": {
                "id": 41,
                "unique_id": "suhmvD1dFp",
                "name": null,
                "username": "加藤 七夏",
                "email": "tharada@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "ANOOxwZEOD",
                    "name": null,
                    "username": "斉藤 明美",
                    "email": "sayuri16@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "gN2QQlBx2f",
                    "name": null,
                    "username": "笹田 健一",
                    "email": "yuki.ekoda@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "ltojT73jzB",
                    "name": null,
                    "username": "廣川 直子",
                    "email": "rei31@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 164,
            "name": "ipsa",
            "shop_id": "J000449898",
            "budget": 26035,
            "actual": 8734,
            "start_time": "2019-02-19 07:50:24",
            "end_time": "2019-03-06 07:50:24",
            "manager": {
                "id": 41,
                "unique_id": "suhmvD1dFp",
                "name": null,
                "username": "加藤 七夏",
                "email": "tharada@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 4,
                    "unique_id": "ANOOxwZEOD",
                    "name": null,
                    "username": "斉藤 明美",
                    "email": "sayuri16@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "Ly5cBmxOZU",
                    "name": null,
                    "username": "井高 修平",
                    "email": "tnomura@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:24.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:24.000000",
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
            "id": 113,
            "name": "facilis",
            "shop_id": "J001006387",
            "budget": 1247,
            "actual": 31029,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 29,
                "unique_id": "q7AooPtlBh",
                "name": null,
                "username": "笹田 学",
                "email": "watanabe.naoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 35,
                    "unique_id": "75cDOB39xx",
                    "name": null,
                    "username": "青田 裕美子",
                    "email": "gishida@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 115,
            "name": "voluptas",
            "shop_id": "J001177654",
            "budget": 22342,
            "actual": 47470,
            "start_time": "2019-03-01 07:50:19",
            "end_time": "2019-03-06 07:50:19",
            "manager": {
                "id": 29,
                "unique_id": "q7AooPtlBh",
                "name": null,
                "username": "笹田 学",
                "email": "watanabe.naoto@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 129,
            "name": "eum",
            "shop_id": "J001177654",
            "budget": 15092,
            "actual": 39041,
            "start_time": null,
            "end_time": null,
            "manager": {
                "id": 33,
                "unique_id": "b8UmI45yXE",
                "name": null,
                "username": "大垣 裕太",
                "email": "sato.kumiko@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "h4P5xu1wox",
                    "name": null,
                    "username": "浜田 亮介",
                    "email": "asugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Np7yoom5ho",
                    "name": null,
                    "username": "山口 篤司",
                    "email": "mikako79@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:21.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 138,
            "name": "velit",
            "shop_id": "J000753015",
            "budget": 1250,
            "actual": 33406,
            "start_time": "2019-02-14 07:50:22",
            "end_time": "2019-02-19 07:50:22",
            "manager": {
                "id": 35,
                "unique_id": "75cDOB39xx",
                "name": null,
                "username": "青田 裕美子",
                "email": "gishida@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
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
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "unique_id": "Ce5Gvdv3u4",
                    "name": null,
                    "username": "原田 直人",
                    "email": "rika73@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "J63Yo17sv0",
                    "name": null,
                    "username": "近藤 稔",
                    "email": "xnakatsugawa@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "0bo4xXeSST",
                    "name": null,
                    "username": "西之園 充",
                    "email": "ekoda.jun@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:22.000000",
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
            "session": "6SAdUuF9oHD2UyDP",
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
        "id": 164,
        "name": "ipsa",
        "shop_id": "J000449898",
        "budget": 26035,
        "actual": 8734,
        "start_time": "2019-02-19 07:50:24",
        "end_time": "2019-03-06 07:50:24",
        "manager": {
            "id": 41,
            "unique_id": "suhmvD1dFp",
            "name": null,
            "username": "加藤 七夏",
            "email": "tharada@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 4,
                "unique_id": "ANOOxwZEOD",
                "name": null,
                "username": "斉藤 明美",
                "email": "sayuri16@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 21,
                "unique_id": "Ly5cBmxOZU",
                "name": null,
                "username": "井高 修平",
                "email": "tnomura@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 48,
                "unique_id": "Np7yoom5ho",
                "name": null,
                "username": "山口 篤司",
                "email": "mikako79@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-24 07:50:24.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:24.000000",
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
    -d '{"join_status":"sJABR17gUgWQ2uii"}'

```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": "sJABR17gUgWQ2uii"
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
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:28.000000",
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
    -d '{"unique_id":"SzwelVRr4h0s0In9","username":"4QgaSJHPuYHL5AA6","password":"vu7HOJYaWdnMTAxP","unique_id_search_flag":false,"username_search_flag":false}'

```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "SzwelVRr4h0s0In9",
    "username": "4QgaSJHPuYHL5AA6",
    "password": "vu7HOJYaWdnMTAxP",
    "unique_id_search_flag": false,
    "username_search_flag": false
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
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:33.000000",
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:33.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "unique_id": "ANOOxwZEOD",
            "name": null,
            "username": "斉藤 明美",
            "email": "sayuri16@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "h4P5xu1wox",
            "name": null,
            "username": "浜田 亮介",
            "email": "asugiyama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 8,
            "unique_id": "nWxGmaGiem",
            "name": null,
            "username": "木村 洋介",
            "email": "watanabe.mitsuru@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "gN2QQlBx2f",
            "name": null,
            "username": "笹田 健一",
            "email": "yuki.ekoda@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "TMYsIYrVXN",
            "name": null,
            "username": "廣川 直樹",
            "email": "pkobayashi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "nAmjiEjM2X",
            "name": null,
            "username": "桐山 充",
            "email": "mai93@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "eU7cUtYPe7",
            "name": null,
            "username": "渚 知実",
            "email": "kanou.mitsuru@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "YiierdnUXs",
            "name": null,
            "username": "佐藤 翔太",
            "email": "nomura.nanami@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "Ly5cBmxOZU",
            "name": null,
            "username": "井高 修平",
            "email": "tnomura@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "0bo4xXeSST",
            "name": null,
            "username": "西之園 充",
            "email": "ekoda.jun@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "u2TeIKyyZ1",
            "name": null,
            "username": "桐山 明美",
            "email": "shuhei.kanou@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "BR2w5WnVeY",
            "name": null,
            "username": "江古田 里佳",
            "email": "satomi65@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "b8UmI45yXE",
            "name": null,
            "username": "大垣 裕太",
            "email": "sato.kumiko@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "cNZTcPYdTg",
            "name": null,
            "username": "山田 京助",
            "email": "osamu38@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "75cDOB39xx",
            "name": null,
            "username": "青田 裕美子",
            "email": "gishida@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "x7Wh3RMJro",
            "name": null,
            "username": "吉田 直子",
            "email": "awakamatsu@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "3gr4XGQWJd",
            "name": null,
            "username": "小泉 美加子",
            "email": "kumiko.yamaguchi@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "AXkOF6Ny69",
            "name": null,
            "username": "小泉 さゆり",
            "email": "ekoda.hideki@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "suhmvD1dFp",
            "name": null,
            "username": "加藤 七夏",
            "email": "tharada@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "Gt8N3nCS6X",
            "name": null,
            "username": "鈴木 桃子",
            "email": "takuma.watanabe@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "l1P1vOlmAx",
            "name": null,
            "username": "坂本 香織",
            "email": "aoyama.yui@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "EKLjNv8Oah",
            "name": null,
            "username": "工藤 淳",
            "email": "chiyo57@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "GPdcMD2lAg",
            "name": null,
            "username": "笹田 知実",
            "email": "dkiriyama@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "Np7yoom5ho",
            "name": null,
            "username": "山口 篤司",
            "email": "mikako79@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "g3atgvuAIm",
            "name": null,
            "username": "江古田 明美",
            "email": "kaori.idaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "unique_id": "DyOiwqY0T9",
            "name": null,
            "username": "aaaa",
            "email": "LqIUip@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-24 07:50:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "qJiKfYCpQO",
            "name": null,
            "username": "aaaa",
            "email": "NOAUbJB@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-24 07:50:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 57,
            "unique_id": "LbAZq8iw2b",
            "name": null,
            "username": "aaaa",
            "email": "3bpIlL7g@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-02-24 07:50:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:32.000000",
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
    -d '{"username":"iygr3ANj3ytizcMg"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "iygr3ANj3ytizcMg"
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
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
    -d '{"unique_id":"kuloxfW9YNeY3MID"}'

```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "kuloxfW9YNeY3MID"
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
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:28.000000",
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
    -d '{"unique_id":"B255w270OLmPYCvo"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "B255w270OLmPYCvo"
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "TMYsIYrVXN",
            "name": null,
            "username": "廣川 直樹",
            "email": "pkobayashi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
            "session": "MI15mPhmRJ5oqhiZ",
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
    -d '{"user_id":"qSuNr2De4hLckboO","join_status":"DSS8sPBM00K2g3sf","paid":6,"plus_minus":14,"budget":4,"budget_actual":4}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "FgbQ0xug5ELx0Vgv",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "qSuNr2De4hLckboO",
    "join_status": "DSS8sPBM00K2g3sf",
    "paid": 6,
    "plus_minus": 14,
    "budget": 4,
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
            "id": 39,
            "unique_id": "1arPPlr25i",
            "name": null,
            "username": "浜田 康弘",
            "email": "kazuya.hirokawa@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
            "session": "l0bGL15G53YdFLWe",
            "user": "hBoHTSuplyuSJmP5",
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
        "id": 39,
        "unique_id": "1arPPlr25i",
        "name": null,
        "username": "浜田 康弘",
        "email": "kazuya.hirokawa@example.org",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:06.000000",
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
    -d '{"join_status":15,"paid":6,"plus_minus":17,"budget":8,"budget_actual":9}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "IWbWIA2SvMUzlF8b",
            "user": "IXK42FRzkgimPHPX",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": 15,
    "paid": 6,
    "plus_minus": 17,
    "budget": 8,
    "budget_actual": 9
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
        "id": 22,
        "unique_id": "RuGrr2PDE9",
        "name": null,
        "username": "佐々木 直子",
        "email": "yui.wakamatsu@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:06.000000",
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
            "session": "KVmWsCbugznM2OjM",
            "user": "1BjliK4NRa7ouuKP",
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
            "session": "2JihgqfGlc8ilZRN",
            "user": "TCqDN8P1QljyGVc5",
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
        "id": 23,
        "unique_id": "0x8CqbI7fO",
        "name": null,
        "username": "浜田 太一",
        "email": "nakatsugawa.hanako@example.org",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-02-24 07:50:06.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:06.000000",
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
            "session": "cEQe0P5t7LzjEXMD",
            "group": "9flurioivkmW7D09",
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
            "id": 7,
            "unique_id": "6miWZXTmTP",
            "name": null,
            "username": "加納 充",
            "email": "momoko11@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": 0,
            "plus_minus": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
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
            "name": "voluptas",
            "shop_id": "J001125885",
            "budget": 19263,
            "actual": 21554,
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "6miWZXTmTP",
                    "name": null,
                    "username": "加納 充",
                    "email": "momoko11@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rmV89NWtAo",
                    "name": null,
                    "username": "小泉 治",
                    "email": "atsushi09@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "HJfNAkxhwQ",
                    "name": null,
                    "username": "佐藤 直子",
                    "email": "ekoda.haruka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "qui",
            "shop_id": "J001178400",
            "budget": 4607,
            "actual": 13504,
            "start_time": "2019-03-01 07:50:07",
            "end_time": "2019-03-06 07:50:07",
            "manager": {
                "id": 1,
                "unique_id": "TESTTEST",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "cDaYaDdT58",
                    "name": null,
                    "username": "藤本 裕太",
                    "email": "takahashi.ryosuke@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 39,
                    "unique_id": "1arPPlr25i",
                    "name": null,
                    "username": "浜田 康弘",
                    "email": "kazuya.hirokawa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "HJfNAkxhwQ",
                    "name": null,
                    "username": "佐藤 直子",
                    "email": "ekoda.haruka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "similique",
            "shop_id": "J001125885",
            "budget": 22863,
            "actual": 19438,
            "start_time": "2019-02-19 07:50:07",
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 9,
                    "unique_id": "PSQfSFGyRP",
                    "name": null,
                    "username": "渡辺 洋介",
                    "email": "mmiyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "rmV89NWtAo",
                    "name": null,
                    "username": "小泉 治",
                    "email": "atsushi09@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "dolorem",
            "shop_id": "J000109445",
            "budget": 6393,
            "actual": 8538,
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
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:28.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 9,
                    "unique_id": "PSQfSFGyRP",
                    "name": null,
                    "username": "渡辺 洋介",
                    "email": "mmiyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "RuGrr2PDE9",
                    "name": null,
                    "username": "佐々木 直子",
                    "email": "yui.wakamatsu@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "cDaYaDdT58",
                    "name": null,
                    "username": "藤本 裕太",
                    "email": "takahashi.ryosuke@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-02-24 07:50:07.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:07.000000",
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
    -d '{"name":"XlK3BIF4ZNK8ZGPo","shop_id":"t5pslGn5iYe2FryE","budget":6,"actual":6,"start_time":"hDPOUN8aX6gWQ3VY","end_time":"WpKE8Wt7tuQrpCVS"}'

```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "XlK3BIF4ZNK8ZGPo",
    "shop_id": "t5pslGn5iYe2FryE",
    "budget": 6,
    "actual": 6,
    "start_time": "hDPOUN8aX6gWQ3VY",
    "end_time": "WpKE8Wt7tuQrpCVS"
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
        "name": "newSessionc3Hyi",
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-02-24 07:50:33.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:33.000000",
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
            "session": "FYDhhmGSSqbRdB2t",
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
        "name": "dolorem",
        "shop_id": "J000109445",
        "budget": 6393,
        "actual": 8538,
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 9,
                "unique_id": "PSQfSFGyRP",
                "name": null,
                "username": "渡辺 洋介",
                "email": "mmiyake@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 22,
                "unique_id": "RuGrr2PDE9",
                "name": null,
                "username": "佐々木 直子",
                "email": "yui.wakamatsu@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 31,
                "unique_id": "cDaYaDdT58",
                "name": null,
                "username": "藤本 裕太",
                "email": "takahashi.ryosuke@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-24 07:50:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:07.000000",
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
    -d '{"name":"Xt7GrqhkkMdEObXn","shop_id":17,"budget":18,"actual":9,"start_time":"aB5KAqje7lXX9ywL","end_time":"JUd1p4JcN4rG2P6d"}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "mMTsA3MJPS4mqbTc",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "Xt7GrqhkkMdEObXn",
    "shop_id": 17,
    "budget": 18,
    "actual": 9,
    "start_time": "aB5KAqje7lXX9ywL",
    "end_time": "JUd1p4JcN4rG2P6d"
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
        "name": "newUpdateSessionGzTfj",
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
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:28.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 9,
                "unique_id": "PSQfSFGyRP",
                "name": null,
                "username": "渡辺 洋介",
                "email": "mmiyake@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 13,
                "unique_id": "rmV89NWtAo",
                "name": null,
                "username": "小泉 治",
                "email": "atsushi09@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 22,
                "unique_id": "RuGrr2PDE9",
                "name": null,
                "username": "佐々木 直子",
                "email": "yui.wakamatsu@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-02-24 07:50:07.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-02-24 07:50:33.000000",
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
            "session": "90zUh30Smv9UOZdF",
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
            "session": "Ny5XUIF9k5NntM54",
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
            "unique_id": "PSQfSFGyRP",
            "name": null,
            "username": "渡辺 洋介",
            "email": "mmiyake@example.net",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "0x8CqbI7fO",
            "name": null,
            "username": "浜田 太一",
            "email": "nakatsugawa.hanako@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "neque",
                "plus_minus": 9,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "cDaYaDdT58",
            "name": null,
            "username": "藤本 裕太",
            "email": "takahashi.ryosuke@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "1arPPlr25i",
            "name": null,
            "username": "浜田 康弘",
            "email": "kazuya.hirokawa@example.org",
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
                        "date": "2019-02-24 07:50:06.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-02-24 07:50:28.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": 2312,
                "created_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-02-24 07:50:06.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "XwCWQuKFZC",
            "name": null,
            "username": "aaaa",
            "email": "fGUlb@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-02-24 07:50:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-02-24 07:50:32.000000",
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


