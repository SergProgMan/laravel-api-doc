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

#general
<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## Display a listing of all Users.

> Example request:

```bash
curl -X GET -G "http://localhost/api/user" 
```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "id": 1,
        "user_name": "Sandy Rogahn",
        "deleted_at": null,
        "created_at": "2019-02-21 13:36:42",
        "updated_at": "2019-02-21 13:36:42"
    },
    {
        "id": 2,
        "user_name": "Tobin Torp",
        "deleted_at": null,
        "created_at": "2019-02-21 13:36:42",
        "updated_at": "2019-02-21 13:36:42"
    },
    {
        "id": 3,
        "user_name": "Henriette Turner",
        "deleted_at": null,
        "created_at": "2019-02-21 13:36:42",
        "updated_at": "2019-02-21 13:36:42"
    }
]
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Store a newly created User in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -d '{"user_name":"mDCtqqJXtOlpzelH"}'

```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_name": "mDCtqqJXtOlpzelH"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/user`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_name | string |  required  | The name of the User.

<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_a4a2abed1e8e8cad5e6a3282812fe3f3 -->
## Update the specified User in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/user/{user}" \
    -H "Content-Type: application/json" \
    -d '{"id":20,"user_name":"i3TQtSg8QCgWg8XW"}'

```

```javascript
const url = new URL("http://localhost/api/user/{user}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 20,
    "user_name": "i3TQtSg8QCgWg8XW"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/user/{user}`

`PATCH api/user/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the User.
    user_name | string |  required  | The name of the User.

<!-- END_a4a2abed1e8e8cad5e6a3282812fe3f3 -->

<!-- START_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->
## Remove the specified User from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/user/{user}" \
    -H "Content-Type: application/json" \
    -d '{"id":4}'

```

```javascript
const url = new URL("http://localhost/api/user/{user}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 4
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/user/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the User.

<!-- END_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->

<!-- START_c6a2542e6f559a7fbbee119164fba6c4 -->
## Display a listing of all Companies.

> Example request:

```bash
curl -X GET -G "http://localhost/api/company" 
```

```javascript
const url = new URL("http://localhost/api/company");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "id": 1,
        "company_name": "quos deleniti",
        "deleted_at": null,
        "created_at": "2019-02-21 13:36:42",
        "updated_at": "2019-02-21 13:36:42"
    },
    {
        "id": 2,
        "company_name": "qui voluptas",
        "deleted_at": null,
        "created_at": "2019-02-21 13:36:42",
        "updated_at": "2019-02-21 13:36:42"
    },
    {
        "id": 3,
        "company_name": "eveniet aliquam",
        "deleted_at": null,
        "created_at": "2019-02-21 13:36:42",
        "updated_at": "2019-02-21 13:36:42"
    },
    {
        "id": 4,
        "company_name": "quae tempora",
        "deleted_at": null,
        "created_at": "2019-02-21 13:36:42",
        "updated_at": "2019-02-21 13:36:42"
    },
    {
        "id": 5,
        "company_name": "nihil corporis",
        "deleted_at": null,
        "created_at": "2019-02-21 13:36:42",
        "updated_at": "2019-02-21 13:36:42"
    }
]
```

### HTTP Request
`GET api/company`


<!-- END_c6a2542e6f559a7fbbee119164fba6c4 -->

<!-- START_153d2119af6a72086ba88bc83d58b6b2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/company" \
    -H "Content-Type: application/json" \
    -d '{"company_name":"XzBJ64KYpUFxh8xA"}'

```

```javascript
const url = new URL("http://localhost/api/company");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "company_name": "XzBJ64KYpUFxh8xA"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/company`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    company_name | string |  required  | The name of the Company.

<!-- END_153d2119af6a72086ba88bc83d58b6b2 -->

<!-- START_2ecc0bb9bcbb89fc130ff0e2da45de7e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/company/{company}" \
    -H "Content-Type: application/json" \
    -d '{"id":8,"user_name":"ozj66RvAS9K58k5y"}'

```

```javascript
const url = new URL("http://localhost/api/company/{company}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 8,
    "user_name": "ozj66RvAS9K58k5y"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/company/{company}`

`PATCH api/company/{company}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the Company.
    user_name | string |  required  | The name of the Company.

<!-- END_2ecc0bb9bcbb89fc130ff0e2da45de7e -->

<!-- START_17894c0b6f5be7517e5738594a8a845f -->
## Remove the specified Company from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/company/{company}" \
    -H "Content-Type: application/json" \
    -d '{"id":4}'

```

```javascript
const url = new URL("http://localhost/api/company/{company}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 4
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/company/{company}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the Company.

<!-- END_17894c0b6f5be7517e5738594a8a845f -->


