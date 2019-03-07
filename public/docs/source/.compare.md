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
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "et",
            "plus_minus": -2616,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "repellendus",
            "plus_minus": 1471,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "excepturi",
            "plus_minus": 1886,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
    -d '{"name":"dmR6sFZobLMgHWBS","plus_minus":7}'

```

```javascript
const url = new URL("http://localhost/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "dmR6sFZobLMgHWBS",
    "plus_minus": 7
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
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "attributenamezHyYe",
        "plus_minus": null,
        "created_at": {
            "date": "2019-03-07 17:34:56.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:34:56.000000",
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
            "attribute": "zl4DU9nBS8F0mcC7",
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
            "id": 7,
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "et",
        "plus_minus": -2616,
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:25.000000",
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
    -d '{"name":"eVahVdYOZLnxVHvJ","plus_minus":20}'

```

```javascript
const url = new URL("http://localhost/api/attributes/{attribute}");

    let params = {
            "attribute": "SufVcvyediOo5Mrl",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "eVahVdYOZLnxVHvJ",
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
        "id": 4,
        "manager": {
            "id": 7,
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "update9R1JZ",
        "plus_minus": null,
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:34:56.000000",
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
            "attribute": "XsiD5z4ocDta584v",
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
    -d '{"email":"iOMNsEVgy5tBYMwd","username":"7NvtrlpygLsEDNfI","password":"Dzkml2y4S71tJvRU"}'

```

```javascript
const url = new URL("http://localhost/api/auth/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "iOMNsEVgy5tBYMwd",
    "username": "7NvtrlpygLsEDNfI",
    "password": "Dzkml2y4S71tJvRU"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NTE5NDc2OTcsImV4cCI6MTU1MTk4MzY5NywibmJmIjoxNTUxOTQ3Njk3LCJqdGkiOiJLVGt6VUdLaTNwQ3NZRUN5Iiwic3ViIjo1NywicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.yiRg3ERlUbpwaDXJjxMlTYcdh_dxomT3nIYDVXnzNP0",
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
    -d '{"email":"cHa4wkzipXmvUw97","password":"BkXVsnlpcgXukfyQ"}'

```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "cHa4wkzipXmvUw97",
    "password": "BkXVsnlpcgXukfyQ"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTE5NDc3MDQsImV4cCI6MTU1MTk4MzcwNCwibmJmIjoxNTUxOTQ3NzA0LCJqdGkiOiJXcHlzdDBsVWhITmp6OXJ5Iiwic3ViIjo4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.SMffushxSjuDp6RSSEYIUXbk1ruycMOZRXbO-n5gJx4",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVmcmVzaCIsImlhdCI6MTU1MTk0NzY5NywiZXhwIjoxNTUxOTgzNjk3LCJuYmYiOjE1NTE5NDc2OTcsImp0aSI6IlBVVzdWMjVuQVl6cDVPcGIiLCJzdWIiOjcsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.KGch2NY_wqaOOz3IbGAuOkqhsT2NOTot4RqMChb6Vi4",
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
        "unique_id": "y0bQnQYA9o",
        "username": "テスト太郎",
        "email": "testuser@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:37.000000",
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
    -d '{"email":"FnqGErbjN1ecssyp","password":"IiePUmtLCoKeQEzq"}'

```

```javascript
const url = new URL("http://localhost/api/admin/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "FnqGErbjN1ecssyp",
    "password": "IiePUmtLCoKeQEzq"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTE5NDc3MDQsImV4cCI6MTU1MTk4MzcwNCwibmJmIjoxNTUxOTQ3NzA0LCJqdGkiOiJXcHlzdDBsVWhITmp6OXJ5Iiwic3ViIjo4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.SMffushxSjuDp6RSSEYIUXbk1ruycMOZRXbO-n5gJx4",
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
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "oHl9EfO",
            "current_location_flag": 0,
            "longitude": 140.01,
            "latitude": 35.72,
            "timer": "01:00:00",
            "group": {
                "id": 2,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "animi",
                "users": [
                    {
                        "id": 15,
                        "unique_id": "5oNkjJtaJQ",
                        "name": null,
                        "username": "松本 くみ子",
                        "email": "kanou.asuka@example.net",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-03-07 17:33:25.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "updated_at": {
                            "date": "2019-03-07 17:33:25.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 19,
                        "unique_id": "vxy2EOFN6B",
                        "name": null,
                        "username": "佐々木 花子",
                        "email": "widaka@example.net",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-03-07 17:33:25.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "updated_at": {
                            "date": "2019-03-07 17:33:25.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "deleted_at": null
                    }
                ],
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
    -d '{"name":"GPjjCiRCTaRRxKgt","current_location_flag":false,"latitude":"A80FtZQ7pJlooRP2","longitude":"iWUbHEK2AhXsVWaQ","timer":5,"group_id":12}'

```

```javascript
const url = new URL("http://localhost/api/default_settings");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "GPjjCiRCTaRRxKgt",
    "current_location_flag": false,
    "latitude": "A80FtZQ7pJlooRP2",
    "longitude": "iWUbHEK2AhXsVWaQ",
    "timer": 5,
    "group_id": 12
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
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "eC5fdO",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
            "id": 2,
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "animi",
            "users": [
                {
                    "id": 15,
                    "unique_id": "5oNkjJtaJQ",
                    "name": null,
                    "username": "松本 くみ子",
                    "email": "kanou.asuka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-07 17:34:57.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:34:57.000000",
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
            "default_setting": "Z7OMxgt5fiAig1cR",
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
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "oHl9EfO",
        "current_location_flag": 0,
        "longitude": 140.01,
        "latitude": 35.72,
        "timer": "01:00:00",
        "group": {
            "id": 2,
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "animi",
            "users": [
                {
                    "id": 15,
                    "unique_id": "5oNkjJtaJQ",
                    "name": null,
                    "username": "松本 くみ子",
                    "email": "kanou.asuka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:25.000000",
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
    -d '{"name":"KO74AZB2Uhc2Xyqn","current_location_flag":true,"latitude":"aioD3n6dgLWzaYsf","longitude":"lKa4SiB4n53tBcAn","timer":5,"group_id":19}'

```

```javascript
const url = new URL("http://localhost/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "0BRS9tjbpP3ecTeC",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "KO74AZB2Uhc2Xyqn",
    "current_location_flag": true,
    "latitude": "aioD3n6dgLWzaYsf",
    "longitude": "lKa4SiB4n53tBcAn",
    "timer": 5,
    "group_id": 19
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
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "newSettingsqH2JYoWc",
        "current_location_flag": 0,
        "longitude": 140.01,
        "latitude": 35.72,
        "timer": "01:00:00",
        "group": {
            "id": 2,
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "animi",
            "users": [
                {
                    "id": 15,
                    "unique_id": "5oNkjJtaJQ",
                    "name": null,
                    "username": "松本 くみ子",
                    "email": "kanou.asuka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:34:57.000000",
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
            "default_setting": "ZaZuEZGZvuRo7Yed",
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
            "id": 12,
            "unique_id": "xy56Q1LH2q",
            "name": null,
            "username": "渡辺 亮介",
            "email": "hideki55@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "5oNkjJtaJQ",
            "name": null,
            "username": "松本 くみ子",
            "email": "kanou.asuka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "5dhdbb7mcc",
            "name": null,
            "username": "佐藤 和也",
            "email": "yuki27@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "vxy2EOFN6B",
            "name": null,
            "username": "佐々木 花子",
            "email": "widaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "SG1xtjDW03",
            "name": null,
            "username": "笹田 加奈",
            "email": "satomi.yamagishi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "SkUQx8H7zU",
            "name": null,
            "username": "田辺 幹",
            "email": "sasada.chiyo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "1hgJwZX0zx",
            "name": null,
            "username": "中津川 太一",
            "email": "mai64@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "RTmyNh30qI",
            "name": null,
            "username": "高橋 淳",
            "email": "ogaki.miki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "2FSZ7MExPa",
            "name": null,
            "username": "山本 知実",
            "email": "ryohei38@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "ZdLB9aZZIY",
            "name": null,
            "username": "山田 七夏",
            "email": "yuta07@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "IkSp5M37ar",
            "name": null,
            "username": "江古田 千代",
            "email": "atsushi99@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
    -d '{"email":"ViToQu7E7y0h57g3"}'

```

```javascript
const url = new URL("http://localhost/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "ViToQu7E7y0h57g3"
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
    "unique_id": "y0bQnQYA9o",
    "name": null,
    "username": "テスト太郎",
    "email": "testuser@example.com",
    "unique_id_search_flag": 1,
    "username_search_flag": 1,
    "permitted": null,
    "attribute": null,
    "created_at": {
        "date": "2019-03-07 17:33:25.000000",
        "timezone_type": 3,
        "timezone": "Asia\/Tokyo"
    },
    "updated_at": {
        "date": "2019-03-07 17:33:37.000000",
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
            "id": 19,
            "unique_id": "vxy2EOFN6B",
            "name": null,
            "username": "佐々木 花子",
            "email": "widaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 41,
                "manager": {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "harum",
                "plus_minus": -2954,
                "created_at": {
                    "date": "2019-03-07 17:33:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "SkUQx8H7zU",
            "name": null,
            "username": "田辺 幹",
            "email": "sasada.chiyo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 63,
                "manager": {
                    "id": 26,
                    "unique_id": "SkUQx8H7zU",
                    "name": null,
                    "username": "田辺 幹",
                    "email": "sasada.chiyo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "eum",
                "plus_minus": 2976,
                "created_at": {
                    "date": "2019-03-07 17:33:29.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:29.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "Ci62OE8qk2",
            "name": null,
            "username": "井上 舞",
            "email": "atsushi06@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 106,
                "manager": {
                    "id": 41,
                    "unique_id": "Ci62OE8qk2",
                    "name": null,
                    "username": "井上 舞",
                    "email": "atsushi06@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "voluptatem",
                "plus_minus": -345,
                "created_at": {
                    "date": "2019-03-07 17:33:33.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:33.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 51,
            "unique_id": "ksOE8hyRwX",
            "name": null,
            "username": "渡辺 直人",
            "email": "sasada.yui@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 138,
                "manager": {
                    "id": 51,
                    "unique_id": "ksOE8hyRwX",
                    "name": null,
                    "username": "渡辺 直人",
                    "email": "sasada.yui@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "ad",
                "plus_minus": 46,
                "created_at": {
                    "date": "2019-03-07 17:33:35.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:35.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
            "id": 9,
            "unique_id": "DgLy04Brlv",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 41,
            "unique_id": "Ci62OE8qk2",
            "name": null,
            "username": "井上 舞",
            "email": "atsushi06@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "LGH9nYkQuD",
            "name": null,
            "username": "佐々木 陽子",
            "email": "ekoda.tsubasa@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 51,
            "unique_id": "ksOE8hyRwX",
            "name": null,
            "username": "渡辺 直人",
            "email": "sasada.yui@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 0,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
            "id": 8,
            "unique_id": "29E9dlyHE8",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "vPedljUxrC",
            "name": null,
            "username": "江古田 裕美子",
            "email": "mitsuru.watanabe@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 30,
            "unique_id": "rkhCxauxlM",
            "name": null,
            "username": "山岸 晃",
            "email": "taro.kijima@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "B731GSU8Zj",
            "name": null,
            "username": "小泉 加奈",
            "email": "sayuri.kanou@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "p8REXKD6Wf",
            "name": null,
            "username": "中島 直樹",
            "email": "kato.miki@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 59,
            "unique_id": "dlyInNbwg6",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:34:58.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:34:58.000000",
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
            "unique_id": "DgLy04Brlv",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 11,
                "manager": {
                    "id": 9,
                    "unique_id": "DgLy04Brlv",
                    "name": null,
                    "username": "テストユーザー２",
                    "email": "testuser49@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "odio",
                "plus_minus": 1777,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "xy56Q1LH2q",
            "name": null,
            "username": "渡辺 亮介",
            "email": "hideki55@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 19,
                "manager": {
                    "id": 12,
                    "unique_id": "xy56Q1LH2q",
                    "name": null,
                    "username": "渡辺 亮介",
                    "email": "hideki55@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "commodi",
                "plus_minus": 2212,
                "created_at": {
                    "date": "2019-03-07 17:33:26.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:26.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "qiCWEXBTMA",
            "name": null,
            "username": "若松 七夏",
            "email": "yaota@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 23,
                "manager": {
                    "id": 13,
                    "unique_id": "qiCWEXBTMA",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yaota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "nihil",
                "plus_minus": -2695,
                "created_at": {
                    "date": "2019-03-07 17:33:26.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:26.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "0jqvxiodie",
            "name": null,
            "username": "青山 涼平",
            "email": "qmurayama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 38,
                "manager": {
                    "id": 18,
                    "unique_id": "0jqvxiodie",
                    "name": null,
                    "username": "青山 涼平",
                    "email": "qmurayama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "non",
                "plus_minus": 1443,
                "created_at": {
                    "date": "2019-03-07 17:33:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "usUMeP85JI",
            "name": null,
            "username": "村山 里佳",
            "email": "shota.miyake@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 47,
                "manager": {
                    "id": 21,
                    "unique_id": "usUMeP85JI",
                    "name": null,
                    "username": "村山 里佳",
                    "email": "shota.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "est",
                "plus_minus": 2210,
                "created_at": {
                    "date": "2019-03-07 17:33:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:28.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 22,
            "unique_id": "vPedljUxrC",
            "name": null,
            "username": "江古田 裕美子",
            "email": "mitsuru.watanabe@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 49,
                "manager": {
                    "id": 22,
                    "unique_id": "vPedljUxrC",
                    "name": null,
                    "username": "江古田 裕美子",
                    "email": "mitsuru.watanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "dolores",
                "plus_minus": -445,
                "created_at": {
                    "date": "2019-03-07 17:33:29.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:29.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "SG1xtjDW03",
            "name": null,
            "username": "笹田 加奈",
            "email": "satomi.yamagishi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 57,
                "manager": {
                    "id": 24,
                    "unique_id": "SG1xtjDW03",
                    "name": null,
                    "username": "笹田 加奈",
                    "email": "satomi.yamagishi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "quae",
                "plus_minus": -2739,
                "created_at": {
                    "date": "2019-03-07 17:33:29.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:29.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "l8PB1RuqQS",
            "name": null,
            "username": "高橋 加奈",
            "email": "ksato@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 66,
                "manager": {
                    "id": 27,
                    "unique_id": "l8PB1RuqQS",
                    "name": null,
                    "username": "高橋 加奈",
                    "email": "ksato@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "itaque",
                "plus_minus": 2210,
                "created_at": {
                    "date": "2019-03-07 17:33:30.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:30.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "VvJ5ApYS9t",
            "name": null,
            "username": "三宅 加奈",
            "email": "naoko60@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 67,
                "manager": {
                    "id": 28,
                    "unique_id": "VvJ5ApYS9t",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "naoko60@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "enim",
                "plus_minus": 2658,
                "created_at": {
                    "date": "2019-03-07 17:33:30.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:30.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "Fl19fSlY3O",
            "name": null,
            "username": "吉田 くみ子",
            "email": "xsakamoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 94,
                "manager": {
                    "id": 37,
                    "unique_id": "Fl19fSlY3O",
                    "name": null,
                    "username": "吉田 くみ子",
                    "email": "xsakamoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "enim",
                "plus_minus": -2405,
                "created_at": {
                    "date": "2019-03-07 17:33:32.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:32.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "jNifaBuZws",
            "name": null,
            "username": "浜田 くみ子",
            "email": "haruka.koizumi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 100,
                "manager": {
                    "id": 39,
                    "unique_id": "jNifaBuZws",
                    "name": null,
                    "username": "浜田 くみ子",
                    "email": "haruka.koizumi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "minima",
                "plus_minus": -2442,
                "created_at": {
                    "date": "2019-03-07 17:33:32.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:32.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 47,
            "unique_id": "p8REXKD6Wf",
            "name": null,
            "username": "中島 直樹",
            "email": "kato.miki@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 124,
                "manager": {
                    "id": 47,
                    "unique_id": "p8REXKD6Wf",
                    "name": null,
                    "username": "中島 直樹",
                    "email": "kato.miki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "sunt",
                "plus_minus": -598,
                "created_at": {
                    "date": "2019-03-07 17:33:34.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:34.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "ttz27R2ivd",
            "name": null,
            "username": "松本 直子",
            "email": "kana19@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 135,
                "manager": {
                    "id": 50,
                    "unique_id": "ttz27R2ivd",
                    "name": null,
                    "username": "松本 直子",
                    "email": "kana19@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "rerum",
                "plus_minus": -827,
                "created_at": {
                    "date": "2019-03-07 17:33:35.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:35.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "IkSp5M37ar",
            "name": null,
            "username": "江古田 千代",
            "email": "atsushi99@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 145,
                "manager": {
                    "id": 54,
                    "unique_id": "IkSp5M37ar",
                    "name": null,
                    "username": "江古田 千代",
                    "email": "atsushi99@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "quasi",
                "plus_minus": 1546,
                "created_at": {
                    "date": "2019-03-07 17:33:36.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:36.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "xINAoP8qvC",
            "name": null,
            "username": "中村 和也",
            "email": "haruka.sato@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 151,
                "manager": {
                    "id": 56,
                    "unique_id": "xINAoP8qvC",
                    "name": null,
                    "username": "中村 和也",
                    "email": "haruka.sato@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "quam",
                "plus_minus": -96,
                "created_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
            "id": 23,
            "unique_id": "xmEuMnzhxV",
            "name": null,
            "username": "中島 加奈",
            "email": "rei.sugiyama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 52,
                "manager": {
                    "id": 23,
                    "unique_id": "xmEuMnzhxV",
                    "name": null,
                    "username": "中島 加奈",
                    "email": "rei.sugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "autem",
                "plus_minus": -2639,
                "created_at": {
                    "date": "2019-03-07 17:33:29.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:29.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "RTmyNh30qI",
            "name": null,
            "username": "高橋 淳",
            "email": "ogaki.miki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 80,
                "manager": {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "modi",
                "plus_minus": 1639,
                "created_at": {
                    "date": "2019-03-07 17:33:31.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:31.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 40,
            "unique_id": "B731GSU8Zj",
            "name": null,
            "username": "小泉 加奈",
            "email": "sayuri.kanou@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 105,
                "manager": {
                    "id": 40,
                    "unique_id": "B731GSU8Zj",
                    "name": null,
                    "username": "小泉 加奈",
                    "email": "sayuri.kanou@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "aut",
                "plus_minus": -356,
                "created_at": {
                    "date": "2019-03-07 17:33:33.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:33.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "LGH9nYkQuD",
            "name": null,
            "username": "佐々木 陽子",
            "email": "ekoda.tsubasa@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 119,
                "manager": {
                    "id": 45,
                    "unique_id": "LGH9nYkQuD",
                    "name": null,
                    "username": "佐々木 陽子",
                    "email": "ekoda.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "porro",
                "plus_minus": 459,
                "created_at": {
                    "date": "2019-03-07 17:33:34.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:34.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "unique_id": "rmptczoXIG",
            "name": null,
            "username": "佐々木 千代",
            "email": "akemi92@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 149,
                "manager": {
                    "id": 55,
                    "unique_id": "rmptczoXIG",
                    "name": null,
                    "username": "佐々木 千代",
                    "email": "akemi92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "autem",
                "plus_minus": 1810,
                "created_at": {
                    "date": "2019-03-07 17:33:36.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:36.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
    -d '{"user_id":2}'

```

```javascript
const url = new URL("http://localhost/api/friends/permit");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 2
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
    -d '{"user_id":1}'

```

```javascript
const url = new URL("http://localhost/api/friends/reject");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 1
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
    -d '{"attribute_id":7}'

```

```javascript
const url = new URL("http://localhost/api/friends/{friend}/attribute");

    let params = {
            "friend": "9Nl62BuAACTBRaDQ",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "attribute_id": 7
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
            "friend": "DwrRW2IYQYW9LYCa",
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
            "friend": "VlXr1xH142zEPu3X",
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
            "friend": "HV4ZJF5pz2DktDv1",
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
            "friend": "KssSRvediRIMxmpD",
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
        "unique_id": "IkSp5M37ar",
        "name": null,
        "username": "江古田 千代",
        "email": "atsushi99@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "permitted": 1,
        "attribute": {
            "id": 4,
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "update9R1JZ",
            "plus_minus": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:34:56.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:25.000000",
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
            "friend": "Z5Vo5uodqffuiKaw",
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
    -d '{"device_token":"Y6lDkgUXYnJVlAhW"}'

```

```javascript
const url = new URL("http://localhost/api/device_token");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "device_token": "Y6lDkgUXYnJVlAhW"
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
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "device_token": "newTokenTqQlZ142bt1YkigJqEZr",
        "created_at": {
            "date": "2019-03-07 17:34:55.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:34:55.000000",
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
            "group": "4YLfpZaT6056gwJw",
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
    -d '{"user_id":11}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}/users");

    let params = {
            "group": "FHLN8SjxzJZMa6iq",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 11
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
            "group": "9rycBWHQ6K6QZ25i",
            "user": "LjFYg9kLPzeoEBkY",
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
        "id": 32,
        "unique_id": "RTmyNh30qI",
        "name": null,
        "username": "高橋 淳",
        "email": "ogaki.miki@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:25.000000",
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
            "group": "Z7rCNCEqHfUXDJ73",
            "user": "FNcYsw8MJX9qgndN",
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
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "animi",
            "users": [
                {
                    "id": 15,
                    "unique_id": "5oNkjJtaJQ",
                    "name": null,
                    "username": "松本 くみ子",
                    "email": "kanou.asuka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
    -d '{"name":"nn5zxTICx35Ojjlo"}'

```

```javascript
const url = new URL("http://localhost/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "nn5zxTICx35Ojjlo"
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
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "animi",
        "users": [],
        "created_at": {
            "date": "2019-03-07 17:35:01.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:35:01.000000",
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
            "group": "Ljl7zgltpwV4VqOn",
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
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "animi",
        "users": [],
        "created_at": {
            "date": "2019-03-07 17:35:01.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:35:01.000000",
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
    -d '{"name":"Ls1dvJcb3airsAnR"}'

```

```javascript
const url = new URL("http://localhost/api/groups/{group}");

    let params = {
            "group": "syMGGssBZYa7pWpz",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "Ls1dvJcb3airsAnR"
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
            "id": 7,
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "newGroupuiFRBpPn",
        "users": [],
        "created_at": {
            "date": "2019-03-07 17:35:01.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:35:02.000000",
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
            "group": "UaWQ5fu5Y6vVBan5",
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
            "group": "ioo5amnjgXD3eVfA",
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
            "unique_id": "xy56Q1LH2q",
            "name": null,
            "username": "渡辺 亮介",
            "email": "hideki55@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "5oNkjJtaJQ",
            "name": null,
            "username": "松本 くみ子",
            "email": "kanou.asuka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "5dhdbb7mcc",
            "name": null,
            "username": "佐藤 和也",
            "email": "yuki27@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "vxy2EOFN6B",
            "name": null,
            "username": "佐々木 花子",
            "email": "widaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "SG1xtjDW03",
            "name": null,
            "username": "笹田 加奈",
            "email": "satomi.yamagishi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "SkUQx8H7zU",
            "name": null,
            "username": "田辺 幹",
            "email": "sasada.chiyo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "1hgJwZX0zx",
            "name": null,
            "username": "中津川 太一",
            "email": "mai64@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "RTmyNh30qI",
            "name": null,
            "username": "高橋 淳",
            "email": "ogaki.miki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "ZdLB9aZZIY",
            "name": null,
            "username": "山田 七夏",
            "email": "yuta07@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 51,
            "unique_id": "ksOE8hyRwX",
            "name": null,
            "username": "渡辺 直人",
            "email": "sasada.yui@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "IkSp5M37ar",
            "name": null,
            "username": "江古田 千代",
            "email": "atsushi99@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 60,
            "unique_id": "KkTne0PxzL",
            "name": null,
            "username": "aaaa",
            "email": "u69Cz@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:34:59.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:34:59.000000",
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
            "id": 10,
            "name": "aut",
            "shop_id": "J001177654",
            "budget": 8828,
            "actual": 32603,
            "start_time": "2019-03-02 17:33:25",
            "end_time": null,
            "my_budget_estimate": 6600,
            "my_budget_actual": 24450,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 9,
                "unique_id": "DgLy04Brlv",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser49@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "qiCWEXBTMA",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yaota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "SBP4ys1g7P",
                    "name": null,
                    "username": "杉山 亮介",
                    "email": "momoko.nakajima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "B731GSU8Zj",
                    "name": null,
                    "username": "小泉 加奈",
                    "email": "sayuri.kanou@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "Ci62OE8qk2",
                    "name": null,
                    "username": "井上 舞",
                    "email": "atsushi06@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ZdLB9aZZIY",
                    "name": null,
                    "username": "山田 七夏",
                    "email": "yuta07@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "name": "reiciendis",
            "shop_id": "J001178400",
            "budget": 16781,
            "actual": 1737,
            "start_time": "2019-03-02 17:33:26",
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 12,
                "unique_id": "xy56Q1LH2q",
                "name": null,
                "username": "渡辺 亮介",
                "email": "hideki55@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "vPedljUxrC",
                    "name": null,
                    "username": "江古田 裕美子",
                    "email": "mitsuru.watanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "SkUQx8H7zU",
                    "name": null,
                    "username": "田辺 幹",
                    "email": "sasada.chiyo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "LGH9nYkQuD",
                    "name": null,
                    "username": "佐々木 陽子",
                    "email": "ekoda.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "p8REXKD6Wf",
                    "name": null,
                    "username": "中島 直樹",
                    "email": "kato.miki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Nb4I7gKIIc",
                    "name": null,
                    "username": "木村 和也",
                    "email": "asuka55@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:26.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:26.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "name": "itaque",
            "shop_id": "J001182216",
            "budget": 2717,
            "actual": 8393,
            "start_time": "2019-02-25 17:33:28",
            "end_time": "2019-03-02 17:33:28",
            "my_budget_estimate": 2025,
            "my_budget_actual": 6275,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 18,
                "unique_id": "0jqvxiodie",
                "name": null,
                "username": "青山 涼平",
                "email": "qmurayama@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
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
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:35:04.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "gDyWnBk6lM",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "jw0ON6gD9R",
                    "name": null,
                    "username": "松本 七夏",
                    "email": "sugiyama.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "QrrtjJDXlV",
                    "name": null,
                    "username": "近藤 智也",
                    "email": "kijima.akira@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "dLAKR2Teas",
                    "name": null,
                    "username": "加納 明美",
                    "email": "jun.nagisa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "name": "aut",
            "shop_id": "J001006387",
            "budget": 8534,
            "actual": 35131,
            "start_time": "2019-02-25 17:33:28",
            "end_time": "2019-03-02 17:33:28",
            "my_budget_estimate": 6820,
            "my_budget_actual": 28100,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 18,
                "unique_id": "0jqvxiodie",
                "name": null,
                "username": "青山 涼平",
                "email": "qmurayama@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "gDyWnBk6lM",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "jw0ON6gD9R",
                    "name": null,
                    "username": "松本 七夏",
                    "email": "sugiyama.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "PpOxnZLQPr",
                    "name": null,
                    "username": "近藤 結衣",
                    "email": "mikako65@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "1rhElao8WN",
                    "name": null,
                    "username": "斉藤 陽一",
                    "email": "rei.matsumoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "name": "maiores",
            "shop_id": "J001125885",
            "budget": 15297,
            "actual": 48450,
            "start_time": null,
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 21,
                "unique_id": "usUMeP85JI",
                "name": null,
                "username": "村山 里佳",
                "email": "shota.miyake@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "rkhCxauxlM",
                    "name": null,
                    "username": "山岸 晃",
                    "email": "taro.kijima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "B731GSU8Zj",
                    "name": null,
                    "username": "小泉 加奈",
                    "email": "sayuri.kanou@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "NmgQwuK5Fm",
                    "name": null,
                    "username": "藤本 真綾",
                    "email": "kaori07@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 56,
                    "unique_id": "xINAoP8qvC",
                    "name": null,
                    "username": "中村 和也",
                    "email": "haruka.sato@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "name": "quod",
            "shop_id": "J000753015",
            "budget": 16746,
            "actual": 20070,
            "start_time": "2019-03-02 17:33:28",
            "end_time": null,
            "my_budget_estimate": 12550,
            "my_budget_actual": 15050,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 21,
                "unique_id": "usUMeP85JI",
                "name": null,
                "username": "村山 里佳",
                "email": "shota.miyake@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "gDyWnBk6lM",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "bU4FrBh5KC",
                    "name": null,
                    "username": "青田 幹",
                    "email": "mai.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "VvJ5ApYS9t",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "naoko60@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "NmgQwuK5Fm",
                    "name": null,
                    "username": "藤本 真綾",
                    "email": "kaori07@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Nb4I7gKIIc",
                    "name": null,
                    "username": "木村 和也",
                    "email": "asuka55@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "name": "quo",
            "shop_id": "J001178400",
            "budget": 21487,
            "actual": 38744,
            "start_time": "2019-02-25 17:33:29",
            "end_time": "2019-03-02 17:33:29",
            "my_budget_estimate": 10700,
            "my_budget_actual": 19350,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 24,
                "unique_id": "SG1xtjDW03",
                "name": null,
                "username": "笹田 加奈",
                "email": "satomi.yamagishi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "DgLy04Brlv",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "usUMeP85JI",
                    "name": null,
                    "username": "村山 里佳",
                    "email": "shota.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "NmgQwuK5Fm",
                    "name": null,
                    "username": "藤本 真綾",
                    "email": "kaori07@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:29.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:29.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 62,
            "name": "repellendus",
            "shop_id": "J000766202",
            "budget": 3004,
            "actual": 43654,
            "start_time": "2019-03-12 17:33:30",
            "end_time": "2019-03-17 17:33:30",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "l8PB1RuqQS",
                "name": null,
                "username": "高橋 加奈",
                "email": "ksato@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "qiCWEXBTMA",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yaota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "SBP4ys1g7P",
                    "name": null,
                    "username": "杉山 亮介",
                    "email": "momoko.nakajima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "B731GSU8Zj",
                    "name": null,
                    "username": "小泉 加奈",
                    "email": "sayuri.kanou@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "OtzWLaQiDO",
                    "name": null,
                    "username": "笹田 康弘",
                    "email": "imiyazawa@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 63,
            "name": "tempore",
            "shop_id": "J000766202",
            "budget": 22213,
            "actual": 26154,
            "start_time": "2019-02-25 17:33:30",
            "end_time": "2019-03-02 17:33:30",
            "my_budget_estimate": 11100,
            "my_budget_actual": 13050,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "l8PB1RuqQS",
                "name": null,
                "username": "高橋 加奈",
                "email": "ksato@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "qiCWEXBTMA",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yaota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "SBP4ys1g7P",
                    "name": null,
                    "username": "杉山 亮介",
                    "email": "momoko.nakajima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "OtzWLaQiDO",
                    "name": null,
                    "username": "笹田 康弘",
                    "email": "imiyazawa@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "ttz27R2ivd",
                    "name": null,
                    "username": "松本 直子",
                    "email": "kana19@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 65,
            "name": "perferendis",
            "shop_id": "J000109445",
            "budget": 7377,
            "actual": 25220,
            "start_time": "2019-03-02 17:33:30",
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 28,
                "unique_id": "VvJ5ApYS9t",
                "name": null,
                "username": "三宅 加奈",
                "email": "naoko60@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "zQ789S14lT",
                    "name": null,
                    "username": "桐山 幹",
                    "email": "kumiko.tanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "OAl8OBs8yx",
                    "name": null,
                    "username": "宮沢 香織",
                    "email": "ftanaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "LGH9nYkQuD",
                    "name": null,
                    "username": "佐々木 陽子",
                    "email": "ekoda.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 53,
                    "unique_id": "T4CxD7uTeX",
                    "name": null,
                    "username": "伊藤 真綾",
                    "email": "qfujimoto@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 66,
            "name": "id",
            "shop_id": "J001125885",
            "budget": 28433,
            "actual": 39532,
            "start_time": "2019-02-25 17:33:30",
            "end_time": "2019-03-02 17:33:30",
            "my_budget_estimate": 18933.333333333336,
            "my_budget_actual": 26333.333333333332,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 28,
                "unique_id": "VvJ5ApYS9t",
                "name": null,
                "username": "三宅 加奈",
                "email": "naoko60@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "xmEuMnzhxV",
                    "name": null,
                    "username": "中島 加奈",
                    "email": "rei.sugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "rkhCxauxlM",
                    "name": null,
                    "username": "山岸 晃",
                    "email": "taro.kijima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "zQ789S14lT",
                    "name": null,
                    "username": "桐山 幹",
                    "email": "kumiko.tanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "LGH9nYkQuD",
                    "name": null,
                    "username": "佐々木 陽子",
                    "email": "ekoda.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 98,
            "name": "fuga",
            "shop_id": "J000766202",
            "budget": 10904,
            "actual": 3419,
            "start_time": "2019-03-02 17:33:33",
            "end_time": "2019-03-17 17:33:33",
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 39,
                "unique_id": "jNifaBuZws",
                "name": null,
                "username": "浜田 くみ子",
                "email": "haruka.koizumi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "SG1xtjDW03",
                    "name": null,
                    "username": "笹田 加奈",
                    "email": "satomi.yamagishi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "SBP4ys1g7P",
                    "name": null,
                    "username": "杉山 亮介",
                    "email": "momoko.nakajima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Y5m7K5KMlA",
                    "name": null,
                    "username": "三宅 翼",
                    "email": "mogaki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:33.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:33.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 100,
            "name": "at",
            "shop_id": "J000449898",
            "budget": 6754,
            "actual": 49058,
            "start_time": "2019-03-02 17:33:33",
            "end_time": null,
            "my_budget_estimate": 0,
            "my_budget_actual": 0,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 39,
                "unique_id": "jNifaBuZws",
                "name": null,
                "username": "浜田 くみ子",
                "email": "haruka.koizumi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "bU4FrBh5KC",
                    "name": null,
                    "username": "青田 幹",
                    "email": "mai.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "xmEuMnzhxV",
                    "name": null,
                    "username": "中島 加奈",
                    "email": "rei.sugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Y5m7K5KMlA",
                    "name": null,
                    "username": "三宅 翼",
                    "email": "mogaki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:33.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:33.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 143,
            "name": "sequi",
            "shop_id": "J001125885",
            "budget": 2529,
            "actual": 19784,
            "start_time": "2019-03-12 17:33:36",
            "end_time": "2019-03-17 17:33:36",
            "my_budget_estimate": 2020,
            "my_budget_actual": 15819.999999999998,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 54,
                "unique_id": "IkSp5M37ar",
                "name": null,
                "username": "江古田 千代",
                "email": "atsushi99@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "1rhElao8WN",
                    "name": null,
                    "username": "斉藤 陽一",
                    "email": "rei.matsumoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "2FSZ7MExPa",
                    "name": null,
                    "username": "山本 知実",
                    "email": "ryohei38@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "ttz27R2ivd",
                    "name": null,
                    "username": "松本 直子",
                    "email": "kana19@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 55,
                    "unique_id": "rmptczoXIG",
                    "name": null,
                    "username": "佐々木 千代",
                    "email": "akemi92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:36.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:36.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 145,
            "name": "iste",
            "shop_id": "J000753015",
            "budget": 1855,
            "actual": 23798,
            "start_time": "2019-03-12 17:33:36",
            "end_time": "2019-03-17 17:33:36",
            "my_budget_estimate": 1480,
            "my_budget_actual": 19020,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 54,
                "unique_id": "IkSp5M37ar",
                "name": null,
                "username": "江古田 千代",
                "email": "atsushi99@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "0jqvxiodie",
                    "name": null,
                    "username": "青山 涼平",
                    "email": "qmurayama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "VvJ5ApYS9t",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "naoko60@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "1rhElao8WN",
                    "name": null,
                    "username": "斉藤 陽一",
                    "email": "rei.matsumoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "2FSZ7MExPa",
                    "name": null,
                    "username": "山本 知実",
                    "email": "ryohei38@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:36.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:36.000000",
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
            "id": 18,
            "name": "reiciendis",
            "shop_id": "J001178400",
            "budget": 16781,
            "actual": 1737,
            "start_time": "2019-03-02 17:33:26",
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 12,
                "unique_id": "xy56Q1LH2q",
                "name": null,
                "username": "渡辺 亮介",
                "email": "hideki55@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 22,
                    "unique_id": "vPedljUxrC",
                    "name": null,
                    "username": "江古田 裕美子",
                    "email": "mitsuru.watanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 26,
                    "unique_id": "SkUQx8H7zU",
                    "name": null,
                    "username": "田辺 幹",
                    "email": "sasada.chiyo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "LGH9nYkQuD",
                    "name": null,
                    "username": "佐々木 陽子",
                    "email": "ekoda.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 47,
                    "unique_id": "p8REXKD6Wf",
                    "name": null,
                    "username": "中島 直樹",
                    "email": "kato.miki@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Nb4I7gKIIc",
                    "name": null,
                    "username": "木村 和也",
                    "email": "asuka55@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:26.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:26.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "name": "maiores",
            "shop_id": "J001125885",
            "budget": 15297,
            "actual": 48450,
            "start_time": null,
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 21,
                "unique_id": "usUMeP85JI",
                "name": null,
                "username": "村山 里佳",
                "email": "shota.miyake@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "rkhCxauxlM",
                    "name": null,
                    "username": "山岸 晃",
                    "email": "taro.kijima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "B731GSU8Zj",
                    "name": null,
                    "username": "小泉 加奈",
                    "email": "sayuri.kanou@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "NmgQwuK5Fm",
                    "name": null,
                    "username": "藤本 真綾",
                    "email": "kaori07@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 56,
                    "unique_id": "xINAoP8qvC",
                    "name": null,
                    "username": "中村 和也",
                    "email": "haruka.sato@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:28.000000",
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
            "id": 10,
            "name": "aut",
            "shop_id": "J001177654",
            "budget": 8828,
            "actual": 32603,
            "start_time": "2019-03-02 17:33:25",
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 9,
                "unique_id": "DgLy04Brlv",
                "name": null,
                "username": "テストユーザー２",
                "email": "testuser49@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "qiCWEXBTMA",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yaota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "SBP4ys1g7P",
                    "name": null,
                    "username": "杉山 亮介",
                    "email": "momoko.nakajima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "B731GSU8Zj",
                    "name": null,
                    "username": "小泉 加奈",
                    "email": "sayuri.kanou@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 41,
                    "unique_id": "Ci62OE8qk2",
                    "name": null,
                    "username": "井上 舞",
                    "email": "atsushi06@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 46,
                    "unique_id": "ZdLB9aZZIY",
                    "name": null,
                    "username": "山田 七夏",
                    "email": "yuta07@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "name": "itaque",
            "shop_id": "J001182216",
            "budget": 2717,
            "actual": 8393,
            "start_time": "2019-02-25 17:33:28",
            "end_time": "2019-03-02 17:33:28",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 18,
                "unique_id": "0jqvxiodie",
                "name": null,
                "username": "青山 涼平",
                "email": "qmurayama@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 8,
                    "unique_id": "29E9dlyHE8",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "gDyWnBk6lM",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "jw0ON6gD9R",
                    "name": null,
                    "username": "松本 七夏",
                    "email": "sugiyama.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 31,
                    "unique_id": "QrrtjJDXlV",
                    "name": null,
                    "username": "近藤 智也",
                    "email": "kijima.akira@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 36,
                    "unique_id": "dLAKR2Teas",
                    "name": null,
                    "username": "加納 明美",
                    "email": "jun.nagisa@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "name": "aut",
            "shop_id": "J001006387",
            "budget": 8534,
            "actual": 35131,
            "start_time": "2019-02-25 17:33:28",
            "end_time": "2019-03-02 17:33:28",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 18,
                "unique_id": "0jqvxiodie",
                "name": null,
                "username": "青山 涼平",
                "email": "qmurayama@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "gDyWnBk6lM",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 14,
                    "unique_id": "jw0ON6gD9R",
                    "name": null,
                    "username": "松本 七夏",
                    "email": "sugiyama.mikako@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 20,
                    "unique_id": "PpOxnZLQPr",
                    "name": null,
                    "username": "近藤 結衣",
                    "email": "mikako65@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "1rhElao8WN",
                    "name": null,
                    "username": "斉藤 陽一",
                    "email": "rei.matsumoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "name": "quod",
            "shop_id": "J000753015",
            "budget": 16746,
            "actual": 20070,
            "start_time": "2019-03-02 17:33:28",
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 21,
                "unique_id": "usUMeP85JI",
                "name": null,
                "username": "村山 里佳",
                "email": "shota.miyake@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 10,
                    "unique_id": "gDyWnBk6lM",
                    "name": null,
                    "username": "テストユーザー３",
                    "email": "testuser50@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "bU4FrBh5KC",
                    "name": null,
                    "username": "青田 幹",
                    "email": "mai.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "VvJ5ApYS9t",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "naoko60@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "NmgQwuK5Fm",
                    "name": null,
                    "username": "藤本 真綾",
                    "email": "kaori07@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 48,
                    "unique_id": "Nb4I7gKIIc",
                    "name": null,
                    "username": "木村 和也",
                    "email": "asuka55@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:28.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "name": "quo",
            "shop_id": "J001178400",
            "budget": 21487,
            "actual": 38744,
            "start_time": "2019-02-25 17:33:29",
            "end_time": "2019-03-02 17:33:29",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 24,
                "unique_id": "SG1xtjDW03",
                "name": null,
                "username": "笹田 加奈",
                "email": "satomi.yamagishi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 9,
                    "unique_id": "DgLy04Brlv",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 21,
                    "unique_id": "usUMeP85JI",
                    "name": null,
                    "username": "村山 里佳",
                    "email": "shota.miyake@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 43,
                    "unique_id": "NmgQwuK5Fm",
                    "name": null,
                    "username": "藤本 真綾",
                    "email": "kaori07@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:29.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:29.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 63,
            "name": "tempore",
            "shop_id": "J000766202",
            "budget": 22213,
            "actual": 26154,
            "start_time": "2019-02-25 17:33:30",
            "end_time": "2019-03-02 17:33:30",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "l8PB1RuqQS",
                "name": null,
                "username": "高橋 加奈",
                "email": "ksato@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "qiCWEXBTMA",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yaota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "SBP4ys1g7P",
                    "name": null,
                    "username": "杉山 亮介",
                    "email": "momoko.nakajima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "OtzWLaQiDO",
                    "name": null,
                    "username": "笹田 康弘",
                    "email": "imiyazawa@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "ttz27R2ivd",
                    "name": null,
                    "username": "松本 直子",
                    "email": "kana19@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 65,
            "name": "perferendis",
            "shop_id": "J000109445",
            "budget": 7377,
            "actual": 25220,
            "start_time": "2019-03-02 17:33:30",
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 28,
                "unique_id": "VvJ5ApYS9t",
                "name": null,
                "username": "三宅 加奈",
                "email": "naoko60@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "zQ789S14lT",
                    "name": null,
                    "username": "桐山 幹",
                    "email": "kumiko.tanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 44,
                    "unique_id": "OAl8OBs8yx",
                    "name": null,
                    "username": "宮沢 香織",
                    "email": "ftanaka@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "LGH9nYkQuD",
                    "name": null,
                    "username": "佐々木 陽子",
                    "email": "ekoda.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 53,
                    "unique_id": "T4CxD7uTeX",
                    "name": null,
                    "username": "伊藤 真綾",
                    "email": "qfujimoto@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 66,
            "name": "id",
            "shop_id": "J001125885",
            "budget": 28433,
            "actual": 39532,
            "start_time": "2019-02-25 17:33:30",
            "end_time": "2019-03-02 17:33:30",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 28,
                "unique_id": "VvJ5ApYS9t",
                "name": null,
                "username": "三宅 加奈",
                "email": "naoko60@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "xmEuMnzhxV",
                    "name": null,
                    "username": "中島 加奈",
                    "email": "rei.sugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 30,
                    "unique_id": "rkhCxauxlM",
                    "name": null,
                    "username": "山岸 晃",
                    "email": "taro.kijima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 33,
                    "unique_id": "zQ789S14lT",
                    "name": null,
                    "username": "桐山 幹",
                    "email": "kumiko.tanabe@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 45,
                    "unique_id": "LGH9nYkQuD",
                    "name": null,
                    "username": "佐々木 陽子",
                    "email": "ekoda.tsubasa@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 143,
            "name": "sequi",
            "shop_id": "J001125885",
            "budget": 2529,
            "actual": 19784,
            "start_time": "2019-03-12 17:33:36",
            "end_time": "2019-03-17 17:33:36",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 54,
                "unique_id": "IkSp5M37ar",
                "name": null,
                "username": "江古田 千代",
                "email": "atsushi99@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "1rhElao8WN",
                    "name": null,
                    "username": "斉藤 陽一",
                    "email": "rei.matsumoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "2FSZ7MExPa",
                    "name": null,
                    "username": "山本 知実",
                    "email": "ryohei38@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 50,
                    "unique_id": "ttz27R2ivd",
                    "name": null,
                    "username": "松本 直子",
                    "email": "kana19@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 55,
                    "unique_id": "rmptczoXIG",
                    "name": null,
                    "username": "佐々木 千代",
                    "email": "akemi92@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:36.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:36.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 145,
            "name": "iste",
            "shop_id": "J000753015",
            "budget": 1855,
            "actual": 23798,
            "start_time": "2019-03-12 17:33:36",
            "end_time": "2019-03-17 17:33:36",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 54,
                "unique_id": "IkSp5M37ar",
                "name": null,
                "username": "江古田 千代",
                "email": "atsushi99@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 18,
                    "unique_id": "0jqvxiodie",
                    "name": null,
                    "username": "青山 涼平",
                    "email": "qmurayama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 28,
                    "unique_id": "VvJ5ApYS9t",
                    "name": null,
                    "username": "三宅 加奈",
                    "email": "naoko60@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 34,
                    "unique_id": "1rhElao8WN",
                    "name": null,
                    "username": "斉藤 陽一",
                    "email": "rei.matsumoto@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 42,
                    "unique_id": "2FSZ7MExPa",
                    "name": null,
                    "username": "山本 知実",
                    "email": "ryohei38@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:36.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:36.000000",
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
            "id": 62,
            "name": "repellendus",
            "shop_id": "J000766202",
            "budget": 3004,
            "actual": 43654,
            "start_time": "2019-03-12 17:33:30",
            "end_time": "2019-03-17 17:33:30",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 27,
                "unique_id": "l8PB1RuqQS",
                "name": null,
                "username": "高橋 加奈",
                "email": "ksato@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 13,
                    "unique_id": "qiCWEXBTMA",
                    "name": null,
                    "username": "若松 七夏",
                    "email": "yaota@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "SBP4ys1g7P",
                    "name": null,
                    "username": "杉山 亮介",
                    "email": "momoko.nakajima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 40,
                    "unique_id": "B731GSU8Zj",
                    "name": null,
                    "username": "小泉 加奈",
                    "email": "sayuri.kanou@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 49,
                    "unique_id": "OtzWLaQiDO",
                    "name": null,
                    "username": "笹田 康弘",
                    "email": "imiyazawa@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:30.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 98,
            "name": "fuga",
            "shop_id": "J000766202",
            "budget": 10904,
            "actual": 3419,
            "start_time": "2019-03-02 17:33:33",
            "end_time": "2019-03-17 17:33:33",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 39,
                "unique_id": "jNifaBuZws",
                "name": null,
                "username": "浜田 くみ子",
                "email": "haruka.koizumi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "SG1xtjDW03",
                    "name": null,
                    "username": "笹田 加奈",
                    "email": "satomi.yamagishi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 25,
                    "unique_id": "SBP4ys1g7P",
                    "name": null,
                    "username": "杉山 亮介",
                    "email": "momoko.nakajima@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Y5m7K5KMlA",
                    "name": null,
                    "username": "三宅 翼",
                    "email": "mogaki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:33.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:33.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 100,
            "name": "at",
            "shop_id": "J000449898",
            "budget": 6754,
            "actual": 49058,
            "start_time": "2019-03-02 17:33:33",
            "end_time": null,
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 39,
                "unique_id": "jNifaBuZws",
                "name": null,
                "username": "浜田 くみ子",
                "email": "haruka.koizumi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
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
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 11,
                    "unique_id": "bU4FrBh5KC",
                    "name": null,
                    "username": "青田 幹",
                    "email": "mai.yamagishi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 23,
                    "unique_id": "xmEuMnzhxV",
                    "name": null,
                    "username": "中島 加奈",
                    "email": "rei.sugiyama@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 38,
                    "unique_id": "Y5m7K5KMlA",
                    "name": null,
                    "username": "三宅 翼",
                    "email": "mogaki@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:33.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:33.000000",
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
            "session": "gHv82p2gFTSxvkuA",
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
        "id": 62,
        "name": "repellendus",
        "shop_id": "J000766202",
        "budget": 3004,
        "actual": 43654,
        "start_time": "2019-03-12 17:33:30",
        "end_time": "2019-03-17 17:33:30",
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 27,
            "unique_id": "l8PB1RuqQS",
            "name": null,
            "username": "高橋 加奈",
            "email": "ksato@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
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
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 13,
                "unique_id": "qiCWEXBTMA",
                "name": null,
                "username": "若松 七夏",
                "email": "yaota@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 25,
                "unique_id": "SBP4ys1g7P",
                "name": null,
                "username": "杉山 亮介",
                "email": "momoko.nakajima@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 40,
                "unique_id": "B731GSU8Zj",
                "name": null,
                "username": "小泉 加奈",
                "email": "sayuri.kanou@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 49,
                "unique_id": "OtzWLaQiDO",
                "name": null,
                "username": "笹田 康弘",
                "email": "imiyazawa@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-03-07 17:33:30.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:30.000000",
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
    -d '{"join_status":"mNBKYPI0JxkWY5di"}'

```

```javascript
const url = new URL("http://localhost/api/guest/sessions/{session}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": "mNBKYPI0JxkWY5di"
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
        "unique_id": "y0bQnQYA9o",
        "name": null,
        "username": "テスト太郎",
        "email": "testuser@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "wait",
        "paid": 1,
        "plus_minus": null,
        "attribute_name": null,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:37.000000",
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
    -d '{"unique_id":"sUw1t4FmePg3MQkE","email":"DbGAPBLujXKi5FCO","username":"3CfZySgF2ked50Ce","password":"Yazf00ygLka61nkf","unique_id_search_flag":true,"username_search_flag":true}'

```

```javascript
const url = new URL("http://localhost/api/profile/update");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "sUw1t4FmePg3MQkE",
    "email": "DbGAPBLujXKi5FCO",
    "username": "3CfZySgF2ked50Ce",
    "password": "Yazf00ygLka61nkf",
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
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:35:04.000000",
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
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "unique_id": "DOMie9xYrM",
            "name": null,
            "username": "山本 京助",
            "email": "yamamoto@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "unique_id": "7AGrknahiz",
            "name": null,
            "username": "原田 和也",
            "email": "harada@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "unique_id": "xzr3UfonCW",
            "name": null,
            "username": "若松 桃子",
            "email": "wakamatsu@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "unique_id": "1cUC79pBK3",
            "name": null,
            "username": "坂本 太一",
            "email": "sakamoto@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "KZQSbVIQwr",
            "name": null,
            "username": "伊藤 直子",
            "email": "itho@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "gDyWnBk6lM",
            "name": null,
            "username": "テストユーザー３",
            "email": "testuser50@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "bU4FrBh5KC",
            "name": null,
            "username": "青田 幹",
            "email": "mai.yamagishi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "qiCWEXBTMA",
            "name": null,
            "username": "若松 七夏",
            "email": "yaota@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "jw0ON6gD9R",
            "name": null,
            "username": "松本 七夏",
            "email": "sugiyama.mikako@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 17,
            "unique_id": "YCo5TITCaM",
            "name": null,
            "username": "石田 零",
            "email": "gaoyama@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 18,
            "unique_id": "0jqvxiodie",
            "name": null,
            "username": "青山 涼平",
            "email": "qmurayama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 20,
            "unique_id": "PpOxnZLQPr",
            "name": null,
            "username": "近藤 結衣",
            "email": "mikako65@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 21,
            "unique_id": "usUMeP85JI",
            "name": null,
            "username": "村山 里佳",
            "email": "shota.miyake@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 23,
            "unique_id": "xmEuMnzhxV",
            "name": null,
            "username": "中島 加奈",
            "email": "rei.sugiyama@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 25,
            "unique_id": "SBP4ys1g7P",
            "name": null,
            "username": "杉山 亮介",
            "email": "momoko.nakajima@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "l8PB1RuqQS",
            "name": null,
            "username": "高橋 加奈",
            "email": "ksato@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 28,
            "unique_id": "VvJ5ApYS9t",
            "name": null,
            "username": "三宅 加奈",
            "email": "naoko60@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 31,
            "unique_id": "QrrtjJDXlV",
            "name": null,
            "username": "近藤 智也",
            "email": "kijima.akira@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "unique_id": "zQ789S14lT",
            "name": null,
            "username": "桐山 幹",
            "email": "kumiko.tanabe@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "unique_id": "1rhElao8WN",
            "name": null,
            "username": "斉藤 陽一",
            "email": "rei.matsumoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "hOxmDJwZVh",
            "name": null,
            "username": "木村 陽一",
            "email": "naoki.kudo@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "dLAKR2Teas",
            "name": null,
            "username": "加納 明美",
            "email": "jun.nagisa@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 37,
            "unique_id": "Fl19fSlY3O",
            "name": null,
            "username": "吉田 くみ子",
            "email": "xsakamoto@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "Y5m7K5KMlA",
            "name": null,
            "username": "三宅 翼",
            "email": "mogaki@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 39,
            "unique_id": "jNifaBuZws",
            "name": null,
            "username": "浜田 くみ子",
            "email": "haruka.koizumi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 42,
            "unique_id": "2FSZ7MExPa",
            "name": null,
            "username": "山本 知実",
            "email": "ryohei38@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "NmgQwuK5Fm",
            "name": null,
            "username": "藤本 真綾",
            "email": "kaori07@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 44,
            "unique_id": "OAl8OBs8yx",
            "name": null,
            "username": "宮沢 香織",
            "email": "ftanaka@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "Nb4I7gKIIc",
            "name": null,
            "username": "木村 和也",
            "email": "asuka55@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "OtzWLaQiDO",
            "name": null,
            "username": "笹田 康弘",
            "email": "imiyazawa@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "ttz27R2ivd",
            "name": null,
            "username": "松本 直子",
            "email": "kana19@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 52,
            "unique_id": "WU3lwlgQqf",
            "name": null,
            "username": "伊藤 直子",
            "email": "mitsuru.wakamatsu@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 53,
            "unique_id": "T4CxD7uTeX",
            "name": null,
            "username": "伊藤 真綾",
            "email": "qfujimoto@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 55,
            "unique_id": "rmptczoXIG",
            "name": null,
            "username": "佐々木 千代",
            "email": "akemi92@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "unique_id": "xINAoP8qvC",
            "name": null,
            "username": "中村 和也",
            "email": "haruka.sato@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 59,
            "unique_id": "dlyInNbwg6",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-07 17:34:58.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:34:58.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 61,
            "unique_id": "rfjivGOrth",
            "name": null,
            "username": "aaaa",
            "email": "1mkg38@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-07 17:34:59.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:34:59.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 62,
            "unique_id": "JZQfcxA6Wk",
            "name": null,
            "username": "aaaa",
            "email": "VR4TLxE@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-07 17:34:59.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:34:59.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 63,
            "unique_id": "9VLtvmPubb",
            "name": null,
            "username": "aaaa",
            "email": "ydIXi6up@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-07 17:35:00.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:35:00.000000",
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
    -d '{"username":"XAQVwh8aKovcZUwd"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "XAQVwh8aKovcZUwd"
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
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 9,
            "unique_id": "DgLy04Brlv",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "gDyWnBk6lM",
            "name": null,
            "username": "テストユーザー３",
            "email": "testuser50@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
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
    -d '{"unique_id":"jLKZQrQIuPFxs1pS"}'

```

```javascript
const url = new URL("http://localhost/api/search/perfect_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "jLKZQrQIuPFxs1pS"
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
            "date": "2019-03-07 17:33:22.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:22.000000",
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
    -d '{"unique_id":"CAiPTsWgjMuAp2Bn"}'

```

```javascript
const url = new URL("http://localhost/api/search/forward_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "CAiPTsWgjMuAp2Bn"
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
            "id": 53,
            "unique_id": "T4CxD7uTeX",
            "name": null,
            "username": "伊藤 真綾",
            "email": "qfujimoto@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 1,
            "unique_id": "TESTTEST",
            "name": null,
            "username": "幹事　浜田",
            "email": "hamada@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:22.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "ttz27R2ivd",
            "name": null,
            "username": "松本 直子",
            "email": "kana19@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
            "session": "fOWyTFR78vT8zokh",
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
            "unique_id": "xy56Q1LH2q",
            "name": null,
            "username": "渡辺 亮介",
            "email": "hideki55@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "5dhdbb7mcc",
            "name": null,
            "username": "佐藤 和也",
            "email": "yuki27@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "vxy2EOFN6B",
            "name": null,
            "username": "佐々木 花子",
            "email": "widaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "deny",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "SG1xtjDW03",
            "name": null,
            "username": "笹田 加奈",
            "email": "satomi.yamagishi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "RTmyNh30qI",
            "name": null,
            "username": "高橋 淳",
            "email": "ogaki.miki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
    -d '{"user_id":"cJF34JYgv0meHkLH","join_status":"UgTvf7jhlhEYfYWk","paid":7,"budget":11,"budget_actual":11}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users");

    let params = {
            "session": "0mfTnTomWbieeE7Q",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "cJF34JYgv0meHkLH",
    "join_status": "UgTvf7jhlhEYfYWk",
    "paid": 7,
    "budget": 11,
    "budget_actual": 11
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
            "id": 26,
            "unique_id": "SkUQx8H7zU",
            "name": null,
            "username": "田辺 幹",
            "email": "sasada.chiyo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": "update9R1JZ",
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
            "session": "ichVqKHbdAVaQQaH",
            "user": "CYBsM17jOkoF8UqN",
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
        "id": 26,
        "unique_id": "SkUQx8H7zU",
        "name": null,
        "username": "田辺 幹",
        "email": "sasada.chiyo@example.net",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": null,
        "attribute_name": "update9R1JZ",
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:25.000000",
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
    -d '{"join_status":1,"paid":19,"plus_minus":7,"attribute_name":"fDaaM8KwU47EDsAv","budget":8,"budget_actual":3}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}/users/{user}");

    let params = {
            "session": "59X2oXrbYiEkH91d",
            "user": "9cuLbm5K3GMWWQYn",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": 1,
    "paid": 19,
    "plus_minus": 7,
    "attribute_name": "fDaaM8KwU47EDsAv",
    "budget": 8,
    "budget_actual": 3
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
        "id": 46,
        "unique_id": "ZdLB9aZZIY",
        "name": null,
        "username": "山田 七夏",
        "email": "yuta07@example.org",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "attribute_name": "excepturi",
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:25.000000",
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
            "session": "FRfd7ae8ZmEm740c",
            "user": "EdjQRvVDNxJ9uwvK",
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
            "session": "2I57YIkZ3DFxPbxC",
            "user": "fkttRn7yWweE3HTW",
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
        "id": 54,
        "unique_id": "IkSp5M37ar",
        "name": null,
        "username": "江古田 千代",
        "email": "atsushi99@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "wait",
        "paid": 0,
        "plus_minus": null,
        "attribute_name": null,
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:25.000000",
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
            "session": "7hwtbYh0BS8Kua3I",
            "group": "6aXLTDkC3xewMA9S",
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
            "id": 12,
            "unique_id": "xy56Q1LH2q",
            "name": null,
            "username": "渡辺 亮介",
            "email": "hideki55@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": 0,
            "plus_minus": 1886,
            "attribute_name": "excepturi",
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
            "name": "placeat",
            "shop_id": "J001177654",
            "budget": 11923,
            "actual": 43951,
            "start_time": "2019-03-02 17:33:25",
            "end_time": "2019-03-17 17:33:25",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 54,
                    "unique_id": "IkSp5M37ar",
                    "name": null,
                    "username": "江古田 千代",
                    "email": "atsushi99@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "quod",
            "shop_id": "J001182216",
            "budget": 4766,
            "actual": 26232,
            "start_time": "2019-03-12 17:33:25",
            "end_time": "2019-03-17 17:33:25",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 15,
                    "unique_id": "5oNkjJtaJQ",
                    "name": null,
                    "username": "松本 くみ子",
                    "email": "kanou.asuka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "SG1xtjDW03",
                    "name": null,
                    "username": "笹田 加奈",
                    "email": "satomi.yamagishi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "aut",
            "shop_id": "J001182216",
            "budget": 22669,
            "actual": 25416,
            "start_time": "2019-02-25 17:33:25",
            "end_time": "2019-03-02 17:33:25",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 12,
                    "unique_id": "xy56Q1LH2q",
                    "name": null,
                    "username": "渡辺 亮介",
                    "email": "hideki55@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "SG1xtjDW03",
                    "name": null,
                    "username": "笹田 加奈",
                    "email": "satomi.yamagishi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
    -d '{"name":"i42pYnLW89hkYmzi","shop_id":"tfF2np24gK8DfoN2","budget":3,"actual":8,"unit_rounding_budget":16,"unit_rounding_actual":11,"start_time":"eugaNFeQ1pFUFj2c","end_time":"ZxgEhBpskw10hMLf"}'

```

```javascript
const url = new URL("http://localhost/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "i42pYnLW89hkYmzi",
    "shop_id": "tfF2np24gK8DfoN2",
    "budget": 3,
    "actual": 8,
    "unit_rounding_budget": 16,
    "unit_rounding_actual": 11,
    "start_time": "eugaNFeQ1pFUFj2c",
    "end_time": "ZxgEhBpskw10hMLf"
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
        "name": "newSessionVi2Yw",
        "shop_id": "34",
        "budget": 3000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 7,
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-03-07 17:35:04.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:35:04.000000",
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
            "name": "placeat",
            "shop_id": "J001177654",
            "budget": 11923,
            "actual": 43951,
            "start_time": "2019-03-02 17:33:25",
            "end_time": "2019-03-17 17:33:25",
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "quod",
            "shop_id": "J001182216",
            "budget": 4766,
            "actual": 26232,
            "start_time": "2019-03-12 17:33:25",
            "end_time": "2019-03-17 17:33:25",
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 24,
                    "unique_id": "SG1xtjDW03",
                    "name": null,
                    "username": "笹田 加奈",
                    "email": "satomi.yamagishi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "aut",
            "shop_id": "J001182216",
            "budget": 22669,
            "actual": 25416,
            "start_time": "2019-02-25 17:33:25",
            "end_time": "2019-03-02 17:33:25",
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 12,
                    "unique_id": "xy56Q1LH2q",
                    "name": null,
                    "username": "渡辺 亮介",
                    "email": "hideki55@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
            "id": 3,
            "name": "quod",
            "shop_id": "J001182216",
            "budget": 4766,
            "actual": 26232,
            "start_time": "2019-03-12 17:33:25",
            "end_time": "2019-03-17 17:33:25",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 15,
                    "unique_id": "5oNkjJtaJQ",
                    "name": null,
                    "username": "松本 くみ子",
                    "email": "kanou.asuka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "SG1xtjDW03",
                    "name": null,
                    "username": "笹田 加奈",
                    "email": "satomi.yamagishi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 1,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
            "id": 2,
            "name": "placeat",
            "shop_id": "J001177654",
            "budget": 11923,
            "actual": 43951,
            "start_time": "2019-03-02 17:33:25",
            "end_time": "2019-03-17 17:33:25",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 54,
                    "unique_id": "IkSp5M37ar",
                    "name": null,
                    "username": "江古田 千代",
                    "email": "atsushi99@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
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
    "data": [
        {
            "id": 4,
            "name": "aut",
            "shop_id": "J001182216",
            "budget": 22669,
            "actual": 25416,
            "start_time": "2019-02-25 17:33:25",
            "end_time": "2019-03-02 17:33:25",
            "unit_rounding_budget": "100",
            "unit_rounding_actual": "100",
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "users": [
                {
                    "id": 12,
                    "unique_id": "xy56Q1LH2q",
                    "name": null,
                    "username": "渡辺 亮介",
                    "email": "hideki55@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 16,
                    "unique_id": "5dhdbb7mcc",
                    "name": null,
                    "username": "佐藤 和也",
                    "email": "yuki27@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "deny",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 24,
                    "unique_id": "SG1xtjDW03",
                    "name": null,
                    "username": "笹田 加奈",
                    "email": "satomi.yamagishi@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "wait",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 32,
                    "unique_id": "RTmyNh30qI",
                    "name": null,
                    "username": "高橋 淳",
                    "email": "ogaki.miki@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "join_status": "allow",
                    "paid": 0,
                    "plus_minus": null,
                    "attribute_name": null,
                    "budget": null,
                    "budget_actual": null,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        }
    ]
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
            "session": "quwIRj2aUzmPuMHw",
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
        "name": "placeat",
        "shop_id": "J001177654",
        "budget": 11923,
        "actual": 43951,
        "start_time": "2019-03-02 17:33:25",
        "end_time": "2019-03-17 17:33:25",
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 7,
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 16,
                "unique_id": "5dhdbb7mcc",
                "name": null,
                "username": "佐藤 和也",
                "email": "yuki27@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 19,
                "unique_id": "vxy2EOFN6B",
                "name": null,
                "username": "佐々木 花子",
                "email": "widaka@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 32,
                "unique_id": "RTmyNh30qI",
                "name": null,
                "username": "高橋 淳",
                "email": "ogaki.miki@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 54,
                "unique_id": "IkSp5M37ar",
                "name": null,
                "username": "江古田 千代",
                "email": "atsushi99@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:25.000000",
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
    -d '{"name":"WzTpazRL4YEP2Lz9","shop_id":19,"budget":16,"actual":20,"unit_rounding_budget":4,"unit_rounding_actual":11,"start_time":"K3VYlDiw5t6QmjlQ","end_time":"sxHHX0OVwrZ4HGp7"}'

```

```javascript
const url = new URL("http://localhost/api/sessions/{session}");

    let params = {
            "session": "Q2wE8Qq7ZvUkmqPA",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "WzTpazRL4YEP2Lz9",
    "shop_id": 19,
    "budget": 16,
    "actual": 20,
    "unit_rounding_budget": 4,
    "unit_rounding_actual": 11,
    "start_time": "K3VYlDiw5t6QmjlQ",
    "end_time": "sxHHX0OVwrZ4HGp7"
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
        "name": "newUpdateSessionrr5d6",
        "shop_id": "34",
        "budget": 5000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 7,
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 15,
                "unique_id": "5oNkjJtaJQ",
                "name": null,
                "username": "松本 くみ子",
                "email": "kanou.asuka@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 16,
                "unique_id": "5dhdbb7mcc",
                "name": null,
                "username": "佐藤 和也",
                "email": "yuki27@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 24,
                "unique_id": "SG1xtjDW03",
                "name": null,
                "username": "笹田 加奈",
                "email": "satomi.yamagishi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 32,
                "unique_id": "RTmyNh30qI",
                "name": null,
                "username": "高橋 淳",
                "email": "ogaki.miki@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:35:05.000000",
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
            "session": "v6n3EtzbU9Dsisqv",
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
            "session": "yAP8ROYnvlQTsRtl",
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
        "name": "aut",
        "shop_id": "J001182216",
        "budget": 22669,
        "actual": 25416,
        "start_time": "2019-02-25 17:33:25",
        "end_time": "2019-03-02 17:33:25",
        "manager": {
            "id": 7,
            "unique_id": "y0bQnQYA9o",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:37.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 12,
                "unique_id": "xy56Q1LH2q",
                "name": null,
                "username": "渡辺 亮介",
                "email": "hideki55@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 16,
                "unique_id": "5dhdbb7mcc",
                "name": null,
                "username": "佐藤 和也",
                "email": "yuki27@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            {
                "id": 32,
                "unique_id": "RTmyNh30qI",
                "name": null,
                "username": "高橋 淳",
                "email": "ogaki.miki@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-03-07 17:33:25.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-07 17:33:25.000000",
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
            "session": "UqZEJudrKMtvYty1",
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
            "unique_id": "xy56Q1LH2q",
            "name": null,
            "username": "渡辺 亮介",
            "email": "hideki55@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 15,
            "unique_id": "5oNkjJtaJQ",
            "name": null,
            "username": "松本 くみ子",
            "email": "kanou.asuka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 16,
            "unique_id": "5dhdbb7mcc",
            "name": null,
            "username": "佐藤 和也",
            "email": "yuki27@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 19,
            "unique_id": "vxy2EOFN6B",
            "name": null,
            "username": "佐々木 花子",
            "email": "widaka@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 24,
            "unique_id": "SG1xtjDW03",
            "name": null,
            "username": "笹田 加奈",
            "email": "satomi.yamagishi@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 26,
            "unique_id": "SkUQx8H7zU",
            "name": null,
            "username": "田辺 幹",
            "email": "sasada.chiyo@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 29,
            "unique_id": "1hgJwZX0zx",
            "name": null,
            "username": "中津川 太一",
            "email": "mai64@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "unique_id": "RTmyNh30qI",
            "name": null,
            "username": "高橋 淳",
            "email": "ogaki.miki@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 46,
            "unique_id": "ZdLB9aZZIY",
            "name": null,
            "username": "山田 七夏",
            "email": "yuta07@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 51,
            "unique_id": "ksOE8hyRwX",
            "name": null,
            "username": "渡辺 直人",
            "email": "sasada.yui@example.net",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 6,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "excepturi",
                "plus_minus": 1886,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 54,
            "unique_id": "IkSp5M37ar",
            "name": null,
            "username": "江古田 千代",
            "email": "atsushi99@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 4,
                "manager": {
                    "id": 7,
                    "unique_id": "y0bQnQYA9o",
                    "name": null,
                    "username": "テスト太郎",
                    "email": "testuser@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:37.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "update9R1JZ",
                "plus_minus": null,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:34:56.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 60,
            "unique_id": "KkTne0PxzL",
            "name": null,
            "username": "aaaa",
            "email": "u69Cz@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-07 17:34:59.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:34:59.000000",
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
            "session": "1nbk4eItVOiht4wD",
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
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "animi",
            "users": [
                {
                    "id": 15,
                    "unique_id": "5oNkjJtaJQ",
                    "name": null,
                    "username": "松本 くみ子",
                    "email": "kanou.asuka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 19,
                    "unique_id": "vxy2EOFN6B",
                    "name": null,
                    "username": "佐々木 花子",
                    "email": "widaka@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:33:25.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 56,
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "newGroup5Tblv",
            "users": [
                {
                    "id": 12,
                    "unique_id": "xy56Q1LH2q",
                    "name": null,
                    "username": "渡辺 亮介",
                    "email": "hideki55@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:35:02.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:35:02.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 57,
            "manager": {
                "id": 7,
                "unique_id": "y0bQnQYA9o",
                "name": null,
                "username": "テスト太郎",
                "email": "testuser@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-07 17:33:25.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-07 17:33:37.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "newGroupNWhFz",
            "users": [
                {
                    "id": 26,
                    "unique_id": "SkUQx8H7zU",
                    "name": null,
                    "username": "田辺 幹",
                    "email": "sasada.chiyo@example.net",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-07 17:33:25.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-07 17:35:02.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-07 17:35:02.000000",
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


