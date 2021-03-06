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
[Get Postman Collection](http://127.0.0.1:8000/docs/collection.json)

<!-- END_INFO -->

#admin 管理者ページ
<!-- START_16e8f19f8b875dc584cd9ff3a21657f2 -->
## api/admin/groups
> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/admin/groups" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/groups");

let headers = {
    "Accept": "application/json",
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
curl -X GET -G "http://127.0.0.1:8000/api/admin/groups/{group}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/groups/{group}");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/groups/{group}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/groups/{group}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/sessions" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/sessions");

let headers = {
    "Accept": "application/json",
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
curl -X GET -G "http://127.0.0.1:8000/api/admin/sessions/{session}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/sessions/{session}");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/sessions/{session}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/sessions/{session}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/users" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users");

let headers = {
    "Accept": "application/json",
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
curl -X GET -G "http://127.0.0.1:8000/api/admin/users/{user}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/users/{user}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/attributes" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/attributes");

let headers = {
    "Accept": "application/json",
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
curl -X GET -G "http://127.0.0.1:8000/api/admin/attributes/{attribute}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/attributes/{attribute}");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/attributes/{attribute}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/attributes/{attribute}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/default_settings" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/default_settings");

let headers = {
    "Accept": "application/json",
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
curl -X GET -G "http://127.0.0.1:8000/api/admin/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/default_settings/{default_setting}");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/default_settings/{default_setting}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/users/{user}/groups" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/groups");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/users/{user}/groups/{group}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/groups/{group}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/users/{user}/sessions" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/sessions");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/users/{user}/sessions/{session}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/sessions/{session}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/users/{user}/attributes" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/attributes");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/users/{user}/attributes/{attribute}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/attributes/{attribute}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/users/{user}/default_settings" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/default_settings");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/users/{user}/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/default_settings/{default_setting}");

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
curl -X GET -G "http://127.0.0.1:8000/api/attributes" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/attributes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
            "id": 31,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "先生",
            "plus_minus": 5000,
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 32,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "同僚",
            "plus_minus": 0,
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 33,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "同級生",
            "plus_minus": 0,
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 34,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "女性",
            "plus_minus": -500,
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "学生",
            "plus_minus": -1000,
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
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
curl -X POST "http://127.0.0.1:8000/api/attributes" \
    -H "Content-Type: application/json" \
    -d '{"name":"XnXryuSW9c1TviDZ","plus_minus":17}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/attributes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "XnXryuSW9c1TviDZ",
    "plus_minus": 17
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
        "id": 37,
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "attributenameBwdDO",
        "plus_minus": null,
        "created_at": {
            "date": "2019-03-10 06:09:52.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:09:52.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/attributes/{attribute}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/attributes/{attribute}");

    let params = {
            "attribute": "cVqkkv2R4Gjpv8AT",
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
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "同僚",
        "plus_minus": 0,
        "created_at": {
            "date": "2019-03-10 03:35:50.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 03:35:50.000000",
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
curl -X PUT "http://127.0.0.1:8000/api/attributes/{attribute}" \
    -H "Content-Type: application/json" \
    -d '{"name":"VQLndhIYLVnnqqrM","plus_minus":11}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/attributes/{attribute}");

    let params = {
            "attribute": "NsFI1hwBa337Kk7Y",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "VQLndhIYLVnnqqrM",
    "plus_minus": 11
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
        "id": 37,
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "updatekCsLI",
        "plus_minus": null,
        "created_at": {
            "date": "2019-03-10 06:09:52.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:09:52.000000",
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
curl -X DELETE "http://127.0.0.1:8000/api/attributes/{attribute}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/attributes/{attribute}");

    let params = {
            "attribute": "3IQNSTxzHMWsK7mL",
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
curl -X POST "http://127.0.0.1:8000/api/auth/register" \
    -H "Content-Type: application/json" \
    -d '{"email":"qK2KWU9IU5ZDavfu","username":"CFiYOoSU6CTu1xxc","password":"cyElUP90zIsuAle5"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/auth/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "qK2KWU9IU5ZDavfu",
    "username": "CFiYOoSU6CTu1xxc",
    "password": "cyElUP90zIsuAle5"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9yZWdpc3RlciIsImlhdCI6MTU1MjE2NTc5NCwiZXhwIjoxNTUyMTY5Mzk0LCJuYmYiOjE1NTIxNjU3OTQsImp0aSI6IjNiODVaTlJmZHdwTlYzeGQiLCJzdWIiOjgsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.HMU9dv_fAYwBjdzcssxPjTw_UZGysyKw6iPdmBvWg7E",
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
curl -X POST "http://127.0.0.1:8000/api/auth/login" \
    -H "Content-Type: application/json" \
    -d '{"email":"E1Nrgerm23X76pb4","password":"SimRheXIngHIMV4M"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "E1Nrgerm23X76pb4",
    "password": "SimRheXIngHIMV4M"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTIxMTc4MDYsImV4cCI6MTU1MjE1MzgwNiwibmJmIjoxNTUyMTE3ODA2LCJqdGkiOiJIU1o4djQ1RmpjSEFJTVJ2Iiwic3ViIjo4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.dmqBg0qmSXoEDsU1VO78aEt0-UwsVxbDvvGCPeYHl3k",
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
curl -X POST "http://127.0.0.1:8000/api/auth/logout" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/auth/logout");

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
curl -X POST "http://127.0.0.1:8000/api/auth/refresh" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/auth/refresh");

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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9yZWZyZXNoIiwiaWF0IjoxNTUyMTY1Nzk1LCJleHAiOjE1NTIxNjkzOTUsIm5iZiI6MTU1MjE2NTc5NSwianRpIjoiQWptM3Nxc2tVVVZJcnJZdiIsInN1YiI6NywicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.b1TP8esLLsk4Ylrn64QUKM76iYTqzDm50-uhWDAz9mk",
    "token_type": "bearer",
    "expires_in": 3600
}
```

### HTTP Request
`POST api/auth/refresh`


<!-- END_994af8f47e3039ba6d6d67c09dd9e415 -->

<!-- START_7c4c8c21aa8bf7ffa0ae617fb274806d -->
## me 現在ログインしているユーザーの情報を得る

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/auth/me" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/auth/me");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
        "unique_id": "NbiAw6kteV",
        "username": "浜田　太郎",
        "email": "hamada@hew.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-09 15:17:53.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-09 15:17:53.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`GET api/auth/me`


<!-- END_7c4c8c21aa8bf7ffa0ae617fb274806d -->

<!-- START_5aa69278b83da3d25a1e9ed6ccd8175e -->
## api/admin/auth/register
> Example request:

```bash
curl -X POST "http://127.0.0.1:8000/api/admin/auth/register" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/auth/register");

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
curl -X POST "http://127.0.0.1:8000/api/admin/auth/login" \
    -H "Content-Type: application/json" \
    -d '{"email":"KG2pYFHpS6JRfsVb","password":"yYkXyRUX3XLB8eom"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/auth/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "KG2pYFHpS6JRfsVb",
    "password": "yYkXyRUX3XLB8eom"
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NTIxMTc4MDYsImV4cCI6MTU1MjE1MzgwNiwibmJmIjoxNTUyMTE3ODA2LCJqdGkiOiJIU1o4djQ1RmpjSEFJTVJ2Iiwic3ViIjo4LCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.dmqBg0qmSXoEDsU1VO78aEt0-UwsVxbDvvGCPeYHl3k",
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
curl -X GET -G "http://127.0.0.1:8000/api/default_settings" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/default_settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "いつもの設定",
            "current_location_flag": 1,
            "longitude": null,
            "latitude": null,
            "timer": "00:01:00",
            "group": {
                "id": 7,
                "manager": {
                    "id": 7,
                    "unique_id": "GOPiy9Zugv",
                    "name": null,
                    "username": "田中　信也(デモ)",
                    "email": "demo7@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "いつもの",
                "users": [
                    {
                        "id": 5,
                        "unique_id": "iCx6Vo11cd",
                        "name": null,
                        "username": "浜田　太郎(デモ)",
                        "email": "demo5@hew.com",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-03-10 03:35:49.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "updated_at": {
                            "date": "2019-03-10 03:35:49.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "deleted_at": null
                    },
                    {
                        "id": 6,
                        "unique_id": "TmAy4yeWsW",
                        "name": null,
                        "username": "山田　忠明(デモ)",
                        "email": "demo6@hew.com",
                        "unique_id_search_flag": 1,
                        "username_search_flag": 1,
                        "created_at": {
                            "date": "2019-03-10 03:35:49.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "updated_at": {
                            "date": "2019-03-10 03:35:49.000000",
                            "timezone_type": 3,
                            "timezone": "Asia\/Tokyo"
                        },
                        "deleted_at": null
                    }
                ],
                "created_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
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
curl -X POST "http://127.0.0.1:8000/api/default_settings" \
    -H "Content-Type: application/json" \
    -d '{"name":"J2SsTSEmDjnhMTF9","current_location_flag":true,"latitude":"qZZTrYukk83t1nF8","longitude":"ksMnxT8YU312sq9o","timer":5,"group_id":12}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/default_settings");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "J2SsTSEmDjnhMTF9",
    "current_location_flag": true,
    "latitude": "qZZTrYukk83t1nF8",
    "longitude": "ksMnxT8YU312sq9o",
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
        "id": 8,
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "DM8VCS",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
            "id": 7,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "いつもの",
            "users": [
                {
                    "id": 5,
                    "unique_id": "iCx6Vo11cd",
                    "name": null,
                    "username": "浜田　太郎(デモ)",
                    "email": "demo5@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "TmAy4yeWsW",
                    "name": null,
                    "username": "山田　忠明(デモ)",
                    "email": "demo6@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-10 06:09:56.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:09:56.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "ByevwOkuxqKUuw8w",
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
        "id": 8,
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "DM8VCS",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
            "id": 7,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "いつもの",
            "users": [
                {
                    "id": 5,
                    "unique_id": "iCx6Vo11cd",
                    "name": null,
                    "username": "浜田　太郎(デモ)",
                    "email": "demo5@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "TmAy4yeWsW",
                    "name": null,
                    "username": "山田　忠明(デモ)",
                    "email": "demo6@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-10 06:09:56.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:09:56.000000",
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
curl -X PUT "http://127.0.0.1:8000/api/default_settings/{default_setting}" \
    -H "Content-Type: application/json" \
    -d '{"name":"EOuJBCAJJcC9bgpg","current_location_flag":true,"latitude":"0yYamFMjH7necjdz","longitude":"d2nzeCr2OsM5YqrS","timer":16,"group_id":19}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "m9VmD5JwXoAjCh35",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "EOuJBCAJJcC9bgpg",
    "current_location_flag": true,
    "latitude": "0yYamFMjH7necjdz",
    "longitude": "d2nzeCr2OsM5YqrS",
    "timer": 16,
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
        "id": 8,
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "newSettings9DOPLsmc",
        "current_location_flag": 1,
        "longitude": null,
        "latitude": null,
        "timer": "01:00:00",
        "group": {
            "id": 7,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "いつもの",
            "users": [
                {
                    "id": 5,
                    "unique_id": "iCx6Vo11cd",
                    "name": null,
                    "username": "浜田　太郎(デモ)",
                    "email": "demo5@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                {
                    "id": 6,
                    "unique_id": "TmAy4yeWsW",
                    "name": null,
                    "username": "山田　忠明(デモ)",
                    "email": "demo6@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-10 06:09:56.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:09:57.000000",
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
curl -X DELETE "http://127.0.0.1:8000/api/default_settings/{default_setting}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/default_settings/{default_setting}");

    let params = {
            "default_setting": "FRIPVUMvw5bvj4H1",
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
curl -X GET -G "http://127.0.0.1:8000/api/friends" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
            "unique_id": "iCx6Vo11cd",
            "name": null,
            "username": "浜田　太郎(デモ)",
            "email": "demo5@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 6,
            "unique_id": "TmAy4yeWsW",
            "name": null,
            "username": "山田　忠明(デモ)",
            "email": "demo6@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 32,
                "manager": {
                    "id": 7,
                    "unique_id": "GOPiy9Zugv",
                    "name": null,
                    "username": "田中　信也(デモ)",
                    "email": "demo7@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "同僚",
                "plus_minus": 0,
                "created_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
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
curl -X POST "http://127.0.0.1:8000/api/friends" \
    -H "Content-Type: application/json" \
    -d '{"email":"WN3GNh0EvrL5wpPx"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "WN3GNh0EvrL5wpPx"
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
    "unique_id": "GOPiy9Zugv",
    "name": null,
    "username": "田中　信也(デモ)",
    "email": "demo7@hew.com",
    "unique_id_search_flag": 1,
    "username_search_flag": 1,
    "permitted": null,
    "attribute": null,
    "created_at": {
        "date": "2019-03-10 03:35:49.000000",
        "timezone_type": 3,
        "timezone": "Asia\/Tokyo"
    },
    "updated_at": {
        "date": "2019-03-10 03:35:49.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/friends/blocking" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/blocking");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
        "id": 8,
        "unique_id": "DDDDDDDD",
        "name": null,
        "username": "AAAAAAAAAAA",
        "email": "new@new.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-03 02:18:22.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-03-03 02:19:00.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "deleted_at": null
    }
}
```

### HTTP Request
`GET api/friends/blocking`


<!-- END_2f0a7cf4d2fc13f70f2316d095934b4c -->

<!-- START_fcc7d1252ab5638d1a100cc90d4b32b3 -->
## friends.block_me_users 申請した中でブロックされているユーザー一覧

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/friends/block_me" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/block_me");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
`GET api/friends/block_me`


<!-- END_fcc7d1252ab5638d1a100cc90d4b32b3 -->

<!-- START_d0f209202760e23f7254507b81d7dca5 -->
## friends.waitingFriends 申請した中で待っているユーザー一覧

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/friends/waiting" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/waiting");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
            "unique_id": "Vwh5MY3mmh",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": null,
            "attribute": null,
            "created_at": {
                "date": "2019-03-10 06:09:58.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:09:58.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/friends/permitting" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/permitting");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
            "unique_id": "TmAy4yeWsW",
            "name": null,
            "username": "山田　忠明(デモ)",
            "email": "demo6@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 27,
                "manager": {
                    "id": 6,
                    "unique_id": "TmAy4yeWsW",
                    "name": null,
                    "username": "山田　忠明(デモ)",
                    "email": "demo6@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "同僚",
                "plus_minus": 0,
                "created_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/friends/requested" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/requested");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
            "unique_id": "ghqfqIT2q9",
            "name": null,
            "username": "井上 亮介",
            "email": "kumiko.kanou@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 70,
                "manager": {
                    "id": 20,
                    "unique_id": "ghqfqIT2q9",
                    "name": null,
                    "username": "井上 亮介",
                    "email": "kumiko.kanou@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-03 02:18:22.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-03-03 02:18:22.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "velit",
                "plus_minus": -1334,
                "created_at": {
                    "date": "2019-03-03 02:18:29.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:29.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 27,
            "unique_id": "Nz5K8ivimx",
            "name": null,
            "username": "津田 英樹",
            "email": "asuka46@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 106,
                "manager": {
                    "id": 27,
                    "unique_id": "Nz5K8ivimx",
                    "name": null,
                    "username": "津田 英樹",
                    "email": "asuka46@example.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-03 02:18:22.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-03-03 02:18:22.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "recusandae",
                "plus_minus": 2830,
                "created_at": {
                    "date": "2019-03-03 02:18:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:32.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 35,
            "unique_id": "HGDG8UzkfG",
            "name": null,
            "username": "渚 京助",
            "email": "ryohei.sasada@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 145,
                "manager": {
                    "id": 35,
                    "unique_id": "HGDG8UzkfG",
                    "name": null,
                    "username": "渚 京助",
                    "email": "ryohei.sasada@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-03 02:18:22.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-03-03 02:18:22.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "itaque",
                "plus_minus": 1636,
                "created_at": {
                    "date": "2019-03-03 02:18:35.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:35.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 45,
            "unique_id": "fusuk8nms5",
            "name": null,
            "username": "村山 亮介",
            "email": "ryosuke.kobayashi@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": null,
            "attribute": {
                "id": 194,
                "manager": {
                    "id": 45,
                    "unique_id": "fusuk8nms5",
                    "name": null,
                    "username": "村山 亮介",
                    "email": "ryosuke.kobayashi@example.org",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-03 02:18:22.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "updated_at": {
                        "date": "2019-03-03 02:18:22.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "deleted_at": null
                },
                "name": "quo",
                "plus_minus": -1528,
                "created_at": {
                    "date": "2019-03-03 02:18:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:40.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:22.000000",
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
curl -X POST "http://127.0.0.1:8000/api/friends/permit" \
    -H "Content-Type: application/json" \
    -d '{"user_id":4}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/permit");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 4
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
curl -X POST "http://127.0.0.1:8000/api/friends/reject" \
    -H "Content-Type: application/json" \
    -d '{"user_id":17}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/reject");

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
curl -X PUT "http://127.0.0.1:8000/api/friends/{friend}/attribute" \
    -H "Content-Type: application/json" \
    -d '{"attribute_id":7}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/{friend}/attribute");

    let params = {
            "friend": "k54A1vYkKRMvov0R",
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
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
    "line": 124,
    "trace": [
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 53,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
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
            "file": "\/var\/www\/tests\/Unit\/GuestSessionTest.php",
            "line": 25,
            "function": "apiAs",
            "class": "Tests\\TestCase",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/phpunit\/phpunit\/src\/Framework\/TestCase.php",
            "line": 1153,
            "function": "testShow",
            "class": "Tests\\Unit\\GuestSessionTest",
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
curl -X PUT "http://127.0.0.1:8000/api/friends/{friend}/cancel_invitation" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/{friend}/cancel_invitation");

    let params = {
            "friend": "sWcSteTwM8I7GZcv",
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
curl -X PUT "http://127.0.0.1:8000/api/friends/{friend}/block" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/{friend}/block");

    let params = {
            "friend": "99tMHMOW7x8oRFzH",
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
curl -X PUT "http://127.0.0.1:8000/api/friends/{friend}/un_block" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/{friend}/un_block");

    let params = {
            "friend": "M2rnejJOmWB1dCm5",
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
[]
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
curl -X GET -G "http://127.0.0.1:8000/api/friends/{friend}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/{friend}");

    let params = {
            "friend": "y1vzp3tY9A7YDLtG",
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
        "unique_id": "TmAy4yeWsW",
        "name": null,
        "username": "山田　忠明(デモ)",
        "email": "demo6@hew.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "permitted": 1,
        "attribute": {
            "id": 32,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "同僚",
            "plus_minus": 0,
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "created_at": {
            "date": "2019-03-10 03:35:49.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 03:35:49.000000",
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
curl -X DELETE "http://127.0.0.1:8000/api/friends/{friend}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/friends/{friend}");

    let params = {
            "friend": "sEXBkYFq6SY8MsB3",
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
curl -X POST "http://127.0.0.1:8000/api/device_token" \
    -H "Content-Type: application/json" \
    -d '{"device_token":"c7WZoHjvQE3FGQcx"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/device_token");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "device_token": "c7WZoHjvQE3FGQcx"
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
        "id": 8,
        "user": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "device_token": "newToken33OFs8hrRHF1tq12cT8g",
        "created_at": {
            "date": "2019-03-10 06:09:50.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:09:50.000000",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/groups/{group}/users/{user}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/groups/{group}/users/{user}");

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
curl -X DELETE "http://127.0.0.1:8000/api/admin/sessions/{session}/users/{user}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/sessions/{session}/users/{user}");

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

<!-- START_76e5c2933df22dbe179a61776ba133ea -->
## api/admin/shops
> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/admin/shops" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/shops");

let headers = {
    "Accept": "application/json",
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
`GET api/admin/shops`


<!-- END_76e5c2933df22dbe179a61776ba133ea -->

<!-- START_70c9124f28aff7da34cd5b197d2855bf -->
## api/admin/shops/{shop}
> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/admin/shops/{shop}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/shops/{shop}");

let headers = {
    "Accept": "application/json",
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
`GET api/admin/shops/{shop}`


<!-- END_70c9124f28aff7da34cd5b197d2855bf -->

<!-- START_ec2fc87ca867f85bc79f1f7f767030f7 -->
## api/admin/shops/{shop}/sessions
> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/admin/shops/{shop}/sessions" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/shops/{shop}/sessions");

let headers = {
    "Accept": "application/json",
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
`GET api/admin/shops/{shop}/sessions`


<!-- END_ec2fc87ca867f85bc79f1f7f767030f7 -->

<!-- START_8272942d35ff267675ddcf6f6444c339 -->
## api/admin/users/{user}/friends
> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/admin/users/{user}/friends" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/friends");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/users/{user}/friends/{friend}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/friends/{friend}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/users/{user}/guests/sessions" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/guests/sessions");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/users/{user}/guests/sessions/{session}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/guests/sessions/{session}");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/users/{user}/guests/groups" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/guests/groups");

let headers = {
    "Accept": "application/json",
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
curl -X DELETE "http://127.0.0.1:8000/api/admin/users/{user}/guests/groups/{group}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/users/{user}/guests/groups/{group}");

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
curl -X POST "http://127.0.0.1:8000/api/admin/test/notification" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/test/notification");

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
curl -X GET -G "http://127.0.0.1:8000/api/admin/test/realtime" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/admin/test/realtime");

let headers = {
    "Accept": "application/json",
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
curl -X GET -G "http://127.0.0.1:8000/api/groups/{group}/users" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups/{group}/users");

    let params = {
            "group": "54wu4h8zd8tKecJS",
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
            "id": 6,
            "unique_id": "TmAy4yeWsW",
            "name": null,
            "username": "山田　忠明(デモ)",
            "email": "demo6@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
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
curl -X POST "http://127.0.0.1:8000/api/groups/{group}/users" \
    -H "Content-Type: application/json" \
    -d '{"user_id":13}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups/{group}/users");

    let params = {
            "group": "Tu7clCPwsMMvuWOs",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 13
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
curl -X GET -G "http://127.0.0.1:8000/api/groups/{group}/users/{user}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups/{group}/users/{user}");

    let params = {
            "group": "8lH3H0BfFFlvLvpk",
            "user": "Sd6Vmd0gBEeJgADE",
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
        "unique_id": "TmAy4yeWsW",
        "name": null,
        "username": "山田　忠明(デモ)",
        "email": "demo6@hew.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-10 03:35:49.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 03:35:49.000000",
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
curl -X DELETE "http://127.0.0.1:8000/api/groups/{group}/users/{user}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups/{group}/users/{user}");

    let params = {
            "group": "MwIfDmVFlEaAIXpO",
            "user": "K8RHQT45tZa2mPJ9",
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
curl -X GET -G "http://127.0.0.1:8000/api/groups" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "いつもの",
            "users": [
                {
                    "id": 6,
                    "unique_id": "TmAy4yeWsW",
                    "name": null,
                    "username": "山田　忠明(デモ)",
                    "email": "demo6@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
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
curl -X POST "http://127.0.0.1:8000/api/groups" \
    -H "Content-Type: application/json" \
    -d '{"name":"m0VzKgtCzLwXlhSX"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "m0VzKgtCzLwXlhSX"
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
        "id": 9,
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "いつもの",
        "users": [],
        "created_at": {
            "date": "2019-03-10 06:10:09.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:10:09.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/groups/{group}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups/{group}");

    let params = {
            "group": "6WZjxFsUAUnlSdpn",
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
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "いつもの",
        "users": [],
        "created_at": {
            "date": "2019-03-10 06:10:09.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:10:09.000000",
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
curl -X PUT "http://127.0.0.1:8000/api/groups/{group}" \
    -H "Content-Type: application/json" \
    -d '{"name":"eS9mE2XFnJvNUJjS"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups/{group}");

    let params = {
            "group": "NJPmnQWIaeC37Cpn",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "eS9mE2XFnJvNUJjS"
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
        "id": 9,
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "name": "newGroup6ri5juOW",
        "users": [],
        "created_at": {
            "date": "2019-03-10 06:10:09.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:10:09.000000",
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
curl -X DELETE "http://127.0.0.1:8000/api/groups/{group}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups/{group}");

    let params = {
            "group": "GtHagLJv3d2KSGSQ",
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
curl -X GET -G "http://127.0.0.1:8000/api/groups/{group}/users/can_add" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/groups/{group}/users/can_add");

    let params = {
            "group": "Yc6AOijS6yUnJidx",
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
            "id": 6,
            "unique_id": "TmAy4yeWsW",
            "name": null,
            "username": "山田　忠明(デモ)",
            "email": "demo6@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 32,
                "manager": {
                    "id": 7,
                    "unique_id": "GOPiy9Zugv",
                    "name": null,
                    "username": "田中　信也(デモ)",
                    "email": "demo7@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "同僚",
                "plus_minus": 0,
                "created_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "xahPFOtmdG",
            "name": null,
            "username": "aaaa",
            "email": "1ORnm@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-10 06:10:03.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:10:03.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/guest/sessions" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/guest/sessions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
`GET api/guest/sessions`


<!-- END_3a84a6accee6980b8f6727dfd0c9301a -->

<!-- START_4d34946661250f7ba23e037b45241bf1 -->
## guests.sessions.wait ゲストとして招待されていて、まだ返事していないセション一覧

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/guest/sessions/wait" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/guest/sessions/wait");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
`GET api/guest/sessions/wait`


<!-- END_4d34946661250f7ba23e037b45241bf1 -->

<!-- START_93ceb998433bbe98c11d7e95d835a4bd -->
## guests.sessions.allow ゲストとして招待されていて、参加了承したセション一覧

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/guest/sessions/allow" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/guest/sessions/allow");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
`GET api/guest/sessions/allow`


<!-- END_93ceb998433bbe98c11d7e95d835a4bd -->

<!-- START_0dd0efc82fec3ea3c92aac24fba81349 -->
## guests.sessions.deny ゲストとして招待されていて、参加拒否した一覧

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/guest/sessions/deny" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/guest/sessions/deny");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
`GET api/guest/sessions/deny`


<!-- END_0dd0efc82fec3ea3c92aac24fba81349 -->

<!-- START_f002f7656ea051619cc8b112ba27bdbd -->
## guests.sessions.show ゲストとして参加しているセッションの一つの詳細

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/guest/sessions/{session}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/guest/sessions/{session}");

    let params = {
            "session": "QyzAhe13Sjl0jxUM",
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
        "name": "est",
        "shop_id": "J000766202",
        "budget": 3092,
        "actual": 14706,
        "start_time": "2019-02-26 02:18:40",
        "end_time": null,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 44,
            "unique_id": "A0ed48OAxN",
            "name": null,
            "username": "浜田 修平",
            "email": "taro94@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        "users": [
            {
                "id": 7,
                "unique_id": "IU9ezbeLgk",
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
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:43.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 10,
                "unique_id": "BVVVJJg6VW",
                "name": null,
                "username": "中島 翔太",
                "email": "takuma33@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 11,
                "unique_id": "Q72sXBbbJd",
                "name": null,
                "username": "井上 花子",
                "email": "tomoya84@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 21,
                "unique_id": "xQEY76BA28",
                "name": null,
                "username": "廣川 稔",
                "email": "skimura@example.org",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "deny",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 22,
                "unique_id": "6vX1IwEk3r",
                "name": null,
                "username": "青山 くみ子",
                "email": "kiriyama.kenichi@example.net",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "wait",
                "paid": 0,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 38,
                "unique_id": "uWsX34AX7h",
                "name": null,
                "username": "高橋 浩",
                "email": "cyamada@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            },
            {
                "id": 47,
                "unique_id": "OhvXUSp8k3",
                "name": null,
                "username": "高橋 翔太",
                "email": "matsumoto.shota@example.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "join_status": "allow",
                "paid": 1,
                "plus_minus": null,
                "attribute_name": null,
                "budget": null,
                "budget_actual": null,
                "created_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "updated_at": {
                    "date": "2019-03-03 02:18:22.000000",
                    "timezone_type": 3,
                    "timezone": "UTC"
                },
                "deleted_at": null
            }
        ],
        "created_at": {
            "date": "2019-03-03 02:18:40.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-03-03 02:18:40.000000",
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
curl -X PUT "http://127.0.0.1:8000/api/guest/sessions/{session}" \
    -H "Content-Type: application/json" \
    -d '{"join_status":"q1Yb00YEvW1oMx6x"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/guest/sessions/{session}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": "q1Yb00YEvW1oMx6x"
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
    "message": "Token has expired",
    "exception": "Tymon\\JWTAuth\\Exceptions\\TokenExpiredException",
    "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/Claims\/Expiration.php",
    "line": 31,
    "trace": [
        {
            "function": "validatePayload",
            "class": "Tymon\\JWTAuth\\Claims\\Expiration",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/Claims\/Collection.php",
            "line": 62,
            "function": "call_user_func_array"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Support\/Collection.php",
            "line": 419,
            "function": "Tymon\\JWTAuth\\Claims\\{closure}",
            "class": "Tymon\\JWTAuth\\Claims\\Collection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/Claims\/Collection.php",
            "line": 64,
            "function": "each",
            "class": "Illuminate\\Support\\Collection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/Validators\/PayloadValidator.php",
            "line": 83,
            "function": "validate",
            "class": "Tymon\\JWTAuth\\Claims\\Collection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/Validators\/PayloadValidator.php",
            "line": 51,
            "function": "validatePayload",
            "class": "Tymon\\JWTAuth\\Validators\\PayloadValidator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/Payload.php",
            "line": 46,
            "function": "check",
            "class": "Tymon\\JWTAuth\\Validators\\PayloadValidator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/Factory.php",
            "line": 187,
            "function": "__construct",
            "class": "Tymon\\JWTAuth\\Payload",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/Factory.php",
            "line": 87,
            "function": "withClaims",
            "class": "Tymon\\JWTAuth\\Factory",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/Manager.php",
            "line": 106,
            "function": "make",
            "class": "Tymon\\JWTAuth\\Factory",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/JWT.php",
            "line": 200,
            "function": "decode",
            "class": "Tymon\\JWTAuth\\Manager",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/tymon\/jwt-auth\/src\/JWTAuth.php",
            "line": 64,
            "function": "getPayload",
            "class": "Tymon\\JWTAuth\\JWT",
            "type": "->"
        },
        {
            "file": "\/var\/www\/app\/Http\/Middleware\/JWT.php",
            "line": 20,
            "function": "authenticate",
            "class": "Tymon\\JWTAuth\\JWTAuth",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 163,
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
            "file": "\/var\/www\/vendor\/barryvdh\/laravel-cors\/src\/HandleCors.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandleCors",
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
            "line": 163,
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
            "line": 163,
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
            "line": 163,
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
            "line": 163,
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
            "line": 163,
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
            "line": 163,
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
            "line": 163,
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
            "line": 163,
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
            "file": "\/var\/www\/vendor\/barryvdh\/laravel-cors\/src\/HandlePreflight.php",
            "line": 29,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
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
            "file": "\/var\/www\/public\/index.php",
            "line": 55,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        }
    ]
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

#hotpepper ホットペッパー検索系
<!-- START_d59c3c8642be62da8e539040f464ff53 -->
## hotpepper.search.favorite ホットペッパーの検索の際に、店IDをおすすめ順に並べ替える。その中に自分のいったことのある店があれば、[1番人気, 2番人気, 行ったことがある]の順に返す。なければ、[1番人気, 2番人気, ３番人気]の順に返す。レスポンス速度があやしい。

> Example request:

```bash
curl -X POST "http://127.0.0.1:8000/api/hotpepper/recommend" \
    -H "Content-Type: application/json" \
    -d '{"body":"Db1vLcDmYhONVGqP","count":1}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/hotpepper/recommend");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "body": "Db1vLcDmYhONVGqP",
    "count": 1
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
        "J001098881",
        "J001182578",
        "J001100873"
    ]
}
```

### HTTP Request
`POST api/hotpepper/recommend`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    body | 連想配列 |  required  | ホットペッパーの検索の際に使う、クエリパラメータをAPIKEYを除いて渡す
    count | integer |  optional  | 返却する店件数（指定なしの場合３件）

<!-- END_d59c3c8642be62da8e539040f464ff53 -->

#profile プロフィール
<!-- START_083f8e6e87f50a46d0cc30956e5b0812 -->
## profiles.update 自分の情報を更新

> Example request:

```bash
curl -X PUT "http://127.0.0.1:8000/api/profile/update" \
    -H "Content-Type: application/json" \
    -d '{"unique_id":"A8H484eRW818UxSC","email":"U1WuYWHrvCM3nz8C","username":"lpUoQ7FCnaErnNbN","password":"uXKBbtSE5udo2Mtz","unique_id_search_flag":false,"username_search_flag":false}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/profile/update");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "A8H484eRW818UxSC",
    "email": "U1WuYWHrvCM3nz8C",
    "username": "lpUoQ7FCnaErnNbN",
    "password": "uXKBbtSE5udo2Mtz",
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
        "id": 8,
        "unique_id": "DDDDDDDD",
        "name": null,
        "username": "AAAAAAAAAAA",
        "email": "new@new.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-03 02:18:22.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-03-03 02:19:00.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/search/can_add_friend_users" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/search/can_add_friend_users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
            "unique_id": "O6cGcA1xaU",
            "name": null,
            "username": "浜田　太郎",
            "email": "hamada@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 2,
            "unique_id": "4vQetLuR8T",
            "name": null,
            "username": "山田　忠明",
            "email": "yamada@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 3,
            "unique_id": "CSDktqpIYQ",
            "name": null,
            "username": "田中　信也",
            "email": "tanaka@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 4,
            "unique_id": "3Lnb4yIkoo",
            "name": null,
            "username": "山本　京介",
            "email": "yamamoto@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:46.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 5,
            "unique_id": "iCx6Vo11cd",
            "name": null,
            "username": "浜田　太郎(デモ)",
            "email": "demo5@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 10,
            "unique_id": "Vwh5MY3mmh",
            "name": null,
            "username": "testuser3",
            "email": "newfriend@newfriend.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-10 06:09:58.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:09:58.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "unique_id": "yWeN4UOfBn",
            "name": null,
            "username": "aaaa",
            "email": "1TKd6Q@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-10 06:10:04.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:10:04.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "unique_id": "0F2EgROyCT",
            "name": null,
            "username": "aaaa",
            "email": "QOC7Leq@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-10 06:10:05.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:10:05.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 14,
            "unique_id": "KsYq8cTOXv",
            "name": null,
            "username": "aaaa",
            "email": "dgSlgovi@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "created_at": {
                "date": "2019-03-10 06:10:06.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:10:06.000000",
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
curl -X POST "http://127.0.0.1:8000/api/search/forward_by_username" \
    -H "Content-Type: application/json" \
    -d '{"username":"8i8k8HVTAu6zdJhW"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/search/forward_by_username");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "8i8k8HVTAu6zdJhW"
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
            "unique_id": "IU9ezbeLgk",
            "name": null,
            "username": "テスト太郎",
            "email": "testuser@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 48,
            "unique_id": "CwqZQH3cr8",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser48@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 49,
            "unique_id": "4u3Rpoh35C",
            "name": null,
            "username": "テストユーザー２",
            "email": "testuser49@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:43.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "ewhZ6yiT4W",
            "name": null,
            "username": "テストユーザー３",
            "email": "testuser50@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:43.000000",
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
curl -X POST "http://127.0.0.1:8000/api/search/perfect_by_unique_id" \
    -H "Content-Type: application/json" \
    -d '{"unique_id":"dt7wVNIdOBS9ojLm"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/search/perfect_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "dt7wVNIdOBS9ojLm"
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
        "email": "hamada-manager@example.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "created_at": {
            "date": "2019-03-03 02:18:19.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "updated_at": {
            "date": "2019-03-03 02:18:19.000000",
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
curl -X POST "http://127.0.0.1:8000/api/search/forward_by_unique_id" \
    -H "Content-Type: application/json" \
    -d '{"unique_id":"DLE3jwGl5GIE3zLK"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/search/forward_by_unique_id");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "unique_id": "DLE3jwGl5GIE3zLK"
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
            "unique_id": "TmAy4yeWsW",
            "name": null,
            "username": "山田　忠明(デモ)",
            "email": "demo6@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions/{session}/users" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/users");

    let params = {
            "session": "6mqVdVrzwdfd3adv",
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
            "id": 23,
            "unique_id": "OdfKn4PJeo",
            "name": null,
            "username": "宇野 さゆり",
            "email": "hkato@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 36,
            "unique_id": "TT7N4dkYI3",
            "name": null,
            "username": "伊藤 七夏",
            "email": "yamagishi.mikako@example.org",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 1,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 38,
            "unique_id": "uWsX34AX7h",
            "name": null,
            "username": "高橋 浩",
            "email": "cyamada@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": 0,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 43,
            "unique_id": "w5IZ1MHmnA",
            "name": null,
            "username": "井上 明美",
            "email": "kazuya71@example.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "allow",
            "paid": 1,
            "plus_minus": null,
            "attribute_name": null,
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "deleted_at": null
        },
        {
            "id": 50,
            "unique_id": "ewhZ6yiT4W",
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
                "date": "2019-03-03 02:18:22.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
                "date": "2019-03-03 02:18:43.000000",
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
curl -X POST "http://127.0.0.1:8000/api/sessions/{session}/users" \
    -H "Content-Type: application/json" \
    -d '{"user_id":"N3PFlza915IJE06D","join_status":"UTEtz7ELYwrKGWEv","paid":9,"budget":18,"budget_actual":12}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/users");

    let params = {
            "session": "FZdX5U1Zzd5SjZdi",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": "N3PFlza915IJE06D",
    "join_status": "UTEtz7ELYwrKGWEv",
    "paid": 9,
    "budget": 18,
    "budget_actual": 12
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
            "id": 11,
            "unique_id": "xahPFOtmdG",
            "name": null,
            "username": "aaaa",
            "email": "1ORnm@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "join_status": "allow",
            "paid": 0,
            "plus_minus": 0,
            "attribute_name": "",
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-10 06:10:03.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:10:03.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions/{session}/users/{user}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/users/{user}");

    let params = {
            "session": "2W21Ars0F6qy4ONF",
            "user": "0XHRbc5Qy5abWQP5",
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
        "unique_id": "xahPFOtmdG",
        "name": null,
        "username": "aaaa",
        "email": "1ORnm@new.com",
        "unique_id_search_flag": 0,
        "username_search_flag": 0,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 0,
        "attribute_name": "",
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-10 06:10:03.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:10:03.000000",
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
curl -X PUT "http://127.0.0.1:8000/api/sessions/{session}/users/{user}" \
    -H "Content-Type: application/json" \
    -d '{"join_status":19,"paid":12,"plus_minus":2,"attribute_name":"wd8xn0UcZym9EeLm","budget":17,"budget_actual":15}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/users/{user}");

    let params = {
            "session": "HrobnA6unZ8afMxi",
            "user": "2EQYXzOaBVDM3B4A",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "join_status": 19,
    "paid": 12,
    "plus_minus": 2,
    "attribute_name": "wd8xn0UcZym9EeLm",
    "budget": 17,
    "budget_actual": 15
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
        "unique_id": "xahPFOtmdG",
        "name": null,
        "username": "aaaa",
        "email": "1ORnm@new.com",
        "unique_id_search_flag": 0,
        "username_search_flag": 0,
        "join_status": "allow",
        "paid": 0,
        "plus_minus": 10000,
        "attribute_name": "",
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-10 06:10:03.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:10:03.000000",
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
curl -X DELETE "http://127.0.0.1:8000/api/sessions/{session}/users/{user}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/users/{user}");

    let params = {
            "session": "eSa0nDHJv6f8FBqG",
            "user": "EYCvP2jvCadQKsrP",
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
curl -X PUT "http://127.0.0.1:8000/api/sessions/{session}/users/{user}/switch_paid" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/users/{user}/switch_paid");

    let params = {
            "session": "P1Y6umdwtjXn3EDN",
            "user": "WFhWYvlVdi3dj1mi",
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
        "id": 6,
        "unique_id": "TmAy4yeWsW",
        "name": null,
        "username": "山田　忠明(デモ)",
        "email": "demo6@hew.com",
        "unique_id_search_flag": 1,
        "username_search_flag": 1,
        "join_status": "wait",
        "paid": 0,
        "plus_minus": 0,
        "attribute_name": "同僚",
        "budget": null,
        "budget_actual": null,
        "created_at": {
            "date": "2019-03-10 03:35:49.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 03:35:49.000000",
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
curl -X POST "http://127.0.0.1:8000/api/sessions/{session}/groups/{group}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/groups/{group}");

    let params = {
            "session": "hhSZha6OZAy7quer",
            "group": "hClLjI2zt4uXq6Rw",
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
            "id": 6,
            "unique_id": "TmAy4yeWsW",
            "name": null,
            "username": "山田　忠明(デモ)",
            "email": "demo6@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "join_status": "wait",
            "paid": 0,
            "plus_minus": 0,
            "attribute_name": "同僚",
            "budget": null,
            "budget_actual": null,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
`GET api/sessions`


<!-- END_77bc4cbc7d1ccbd254470fad1c1498a2 -->

<!-- START_b0309e45a2af0a1e9b599219dbce6d98 -->
## sessions.store セッションを作成

> Example request:

```bash
curl -X POST "http://127.0.0.1:8000/api/sessions" \
    -H "Content-Type: application/json" \
    -d '{"name":"ZZI6gnczV9JVi35f","shop_id":"hBXf4ntSoOjUrvlh","budget":8,"actual":14,"unit_rounding_budget":16,"unit_rounding_actual":8,"start_time":"TO8ZtPcgYGCLJ36h","end_time":"Vme74ukOzinW0dOr"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "ZZI6gnczV9JVi35f",
    "shop_id": "hBXf4ntSoOjUrvlh",
    "budget": 8,
    "actual": 14,
    "unit_rounding_budget": 16,
    "unit_rounding_actual": 8,
    "start_time": "TO8ZtPcgYGCLJ36h",
    "end_time": "Vme74ukOzinW0dOr"
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
        "id": 3,
        "name": "newSessionyrXHD",
        "shop_id": "34",
        "budget": 3000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-03-10 06:10:19.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:10:19.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions/with_only_allow_users" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/with_only_allow_users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
`GET api/sessions/with_only_allow_users`


<!-- END_c4513c1735d4c69a4924bda25a3862d9 -->

<!-- START_25261926f01cce7bf9e4d51bfd936fdd -->
## sessions.not_start 始まっていないセッション一覧(【条件式】今 &lt; start_time &amp;&amp; deleted_at == null)

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/sessions/not_start" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/not_start");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
`GET api/sessions/not_start`


<!-- END_25261926f01cce7bf9e4d51bfd936fdd -->

<!-- START_8b8bb947db34a256dec6fd3f44245542 -->
## sessions.on_going 進行中のセッション一覧(【条件式】start_time &lt; 今 &lt; end_time &amp;&amp; deleted_at == null)

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/sessions/on_going" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/on_going");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
`GET api/sessions/on_going`


<!-- END_8b8bb947db34a256dec6fd3f44245542 -->

<!-- START_794fba13af94e3e45e9019e11012ae9b -->
## sessions.not_payment_complete セッションのendtimeを迎えたもののうち、支払い待ちユーザーがいるセッション一覧。join_status がallowのもののみ判定。(【条件式】end_time &lt; 今 &amp;&amp; deleted_at == null &amp;&amp; 支払いがまだのユーザーがいる)

> Example request:

```bash
curl -X GET -G "http://127.0.0.1:8000/api/sessions/not_payment_complete" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/not_payment_complete");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions/history" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/history");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions/complete" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/complete");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions/{session}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}");

    let params = {
            "session": "PRFrMzPZSNmSCO6k",
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
        "name": "newSessionyrXHD",
        "shop_id": "34",
        "budget": 3000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-03-10 06:10:19.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:10:19.000000",
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
curl -X PUT "http://127.0.0.1:8000/api/sessions/{session}" \
    -H "Content-Type: application/json" \
    -d '{"name":"vlNFMZ49hn5Aqf3F","shop_id":3,"budget":20,"actual":13,"unit_rounding_budget":1,"unit_rounding_actual":14,"start_time":"f1RfQfzO6MDh8mn6","end_time":"weJ9TFinCZeGUdyR"}'

```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}");

    let params = {
            "session": "QgI7MGVWpv7tA0QB",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "vlNFMZ49hn5Aqf3F",
    "shop_id": 3,
    "budget": 20,
    "actual": 13,
    "unit_rounding_budget": 1,
    "unit_rounding_actual": 14,
    "start_time": "f1RfQfzO6MDh8mn6",
    "end_time": "weJ9TFinCZeGUdyR"
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
        "name": "newUpdateSessioni9kfL",
        "shop_id": "34",
        "budget": 5000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "unit_rounding_budget": "100",
        "unit_rounding_actual": "100",
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-03-10 06:10:19.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:10:21.000000",
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
curl -X DELETE "http://127.0.0.1:8000/api/sessions/{session}" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}");

    let params = {
            "session": "6VFY40yD0oiDRvfz",
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions/{session}/with_only_allow_users" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/with_only_allow_users");

    let params = {
            "session": "kCS1TKz1LaZmRtiw",
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
        "name": "newSessionyrXHD",
        "shop_id": "34",
        "budget": 3000,
        "actual": 3000,
        "start_time": null,
        "end_time": null,
        "manager": {
            "id": 7,
            "unique_id": "GOPiy9Zugv",
            "name": null,
            "username": "田中　信也(デモ)",
            "email": "demo7@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        "users": [],
        "created_at": {
            "date": "2019-03-10 06:10:19.000000",
            "timezone_type": 3,
            "timezone": "Asia\/Tokyo"
        },
        "updated_at": {
            "date": "2019-03-10 06:10:19.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions/{session}/users/can_add" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/users/can_add");

    let params = {
            "session": "gdkF0zeHEL2661C3",
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
            "id": 6,
            "unique_id": "TmAy4yeWsW",
            "name": null,
            "username": "山田　忠明(デモ)",
            "email": "demo6@hew.com",
            "unique_id_search_flag": 1,
            "username_search_flag": 1,
            "permitted": 1,
            "attribute": {
                "id": 32,
                "manager": {
                    "id": 7,
                    "unique_id": "GOPiy9Zugv",
                    "name": null,
                    "username": "田中　信也(デモ)",
                    "email": "demo7@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                },
                "name": "同僚",
                "plus_minus": 0,
                "created_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:50.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "created_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:49.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 11,
            "unique_id": "xahPFOtmdG",
            "name": null,
            "username": "aaaa",
            "email": "1ORnm@new.com",
            "unique_id_search_flag": 0,
            "username_search_flag": 0,
            "permitted": 1,
            "attribute": null,
            "created_at": {
                "date": "2019-03-10 06:10:03.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:10:03.000000",
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
curl -X GET -G "http://127.0.0.1:8000/api/sessions/{session}/groups/can_add" 
```

```javascript
const url = new URL("http://127.0.0.1:8000/api/sessions/{session}/groups/can_add");

    let params = {
            "session": "as0dbY16gNpjOtxY",
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
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "いつもの",
            "users": [
                {
                    "id": 6,
                    "unique_id": "TmAy4yeWsW",
                    "name": null,
                    "username": "山田　忠明(デモ)",
                    "email": "demo6@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 03:35:50.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 12,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "newGroupOFYTq",
            "users": [
                {
                    "id": 6,
                    "unique_id": "TmAy4yeWsW",
                    "name": null,
                    "username": "山田　忠明(デモ)",
                    "email": "demo6@hew.com",
                    "unique_id_search_flag": 1,
                    "username_search_flag": 1,
                    "created_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 03:35:49.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-10 06:10:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:10:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "deleted_at": null
        },
        {
            "id": 13,
            "manager": {
                "id": 7,
                "unique_id": "GOPiy9Zugv",
                "name": null,
                "username": "田中　信也(デモ)",
                "email": "demo7@hew.com",
                "unique_id_search_flag": 1,
                "username_search_flag": 1,
                "created_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "updated_at": {
                    "date": "2019-03-10 03:35:49.000000",
                    "timezone_type": 3,
                    "timezone": "Asia\/Tokyo"
                },
                "deleted_at": null
            },
            "name": "newGroupYapnN",
            "users": [
                {
                    "id": 11,
                    "unique_id": "xahPFOtmdG",
                    "name": null,
                    "username": "aaaa",
                    "email": "1ORnm@new.com",
                    "unique_id_search_flag": 0,
                    "username_search_flag": 0,
                    "created_at": {
                        "date": "2019-03-10 06:10:03.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "updated_at": {
                        "date": "2019-03-10 06:10:03.000000",
                        "timezone_type": 3,
                        "timezone": "Asia\/Tokyo"
                    },
                    "deleted_at": null
                }
            ],
            "created_at": {
                "date": "2019-03-10 06:10:12.000000",
                "timezone_type": 3,
                "timezone": "Asia\/Tokyo"
            },
            "updated_at": {
                "date": "2019-03-10 06:10:12.000000",
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


