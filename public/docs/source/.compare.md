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
[Get Postman Collection](http://api.sudotec.test/docs/collection.json)

<!-- END_INFO -->

#Passport login


<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Login

> Example request:

```bash
curl -X POST "http://api.sudotec.test/api/auth/login" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ" \
    -H "Content-Type: application/json" \
    -d '{"username":"id","password":"iure"}'

```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/login");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "username": "id",
    "password": "iure"
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
`POST api/auth/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    username | string |  required  | Email of the user
    password | string |  required  | Password of the user

<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_16928cb8fc6adf2d9bb675d62a2095c5 -->
## Logout

> Example request:

```bash
curl -X GET -G "http://api.sudotec.test/api/auth/logout" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/logout");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/auth/logout`


<!-- END_16928cb8fc6adf2d9bb675d62a2095c5 -->

#Projects


<!-- START_ec4273285234cd3b3206c1cb3f4b2039 -->
## All projects

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://api.sudotec.test/api/auth/Project" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/Project");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/auth/Project`


<!-- END_ec4273285234cd3b3206c1cb3f4b2039 -->

<!-- START_321fe0393ea5b9d1aeed8aad0b021318 -->
## Create project

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://api.sudotec.test/api/auth/Project" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ" \
    -H "Content-Type: application/json" \
    -d '{"name":"qui","description":"harum","image":"id","status":"ut"}'

```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/Project");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "qui",
    "description": "harum",
    "image": "id",
    "status": "ut"
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
`POST api/auth/Project`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of the project
    description | string |  optional  | Description of the project
    image | image |  required  | Image of the project
    status | string |  required  | Status of the project (enum: ['active', 'inactive'])

<!-- END_321fe0393ea5b9d1aeed8aad0b021318 -->

<!-- START_33e46fea0e914390d4b4ad1e9226c9b8 -->
## Get project

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://api.sudotec.test/api/auth/Project/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/Project/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/auth/Project/{Project}`


<!-- END_33e46fea0e914390d4b4ad1e9226c9b8 -->

<!-- START_393ac4c86f620d0735153b255b463681 -->
## Update project

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://api.sudotec.test/api/auth/Project/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ" \
    -H "Content-Type: application/json" \
    -d '{"name":"dolores","description":"optio","image":"nemo","status":"veritatis"}'

```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/Project/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "dolores",
    "description": "optio",
    "image": "nemo",
    "status": "veritatis"
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
`PUT api/auth/Project/{Project}`

`PATCH api/auth/Project/{Project}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of the project
    description | string |  optional  | Description of the project
    image | image |  required  | Image of the project
    status | string |  required  | Status of the project (enum: ['active', 'inactive'])

<!-- END_393ac4c86f620d0735153b255b463681 -->

<!-- START_cf8754072efc7d220bdfcd73944f4de6 -->
## Delete project

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://api.sudotec.test/api/auth/Project/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/Project/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
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
`DELETE api/auth/Project/{Project}`


<!-- END_cf8754072efc7d220bdfcd73944f4de6 -->

#Register user


<!-- START_2e1c96dcffcfe7e0eb58d6408f1d619e -->
## Create a new user

> Example request:

```bash
curl -X POST "http://api.sudotec.test/api/auth/register" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ" \
    -H "Content-Type: application/json" \
    -d '{"name":"est","email":"facere","type":"tempore"}'

```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/register");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "est",
    "email": "facere",
    "type": "tempore"
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
`POST api/auth/register`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Name of the new user
    email | email |  required  | Email of the new user
    type | string |  required  | Type of the new user ('admin' or 'teacher')

<!-- END_2e1c96dcffcfe7e0eb58d6408f1d619e -->

#general


<!-- START_7c1e0ac0639bb1be6ffd9043492c477a -->
## _ignition/health-check
> Example request:

```bash
curl -X GET -G "http://api.sudotec.test/_ignition/health-check" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/_ignition/health-check");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _ignition/health-check`


<!-- END_7c1e0ac0639bb1be6ffd9043492c477a -->

<!-- START_e5f8cf3530eb18016c5b38d338c824a4 -->
## _ignition/execute-solution
> Example request:

```bash
curl -X POST "http://api.sudotec.test/_ignition/execute-solution" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/_ignition/execute-solution");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
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
`POST _ignition/execute-solution`


<!-- END_e5f8cf3530eb18016c5b38d338c824a4 -->

<!-- START_c7878c22064327a038e101c534d2690d -->
## _ignition/share-report
> Example request:

```bash
curl -X POST "http://api.sudotec.test/_ignition/share-report" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/_ignition/share-report");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
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
`POST _ignition/share-report`


<!-- END_c7878c22064327a038e101c534d2690d -->

<!-- START_022a636baa67209b79bda81cb8c2b0c5 -->
## _ignition/scripts/{script}
> Example request:

```bash
curl -X GET -G "http://api.sudotec.test/_ignition/scripts/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/_ignition/scripts/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _ignition/scripts/{script}`


<!-- END_022a636baa67209b79bda81cb8c2b0c5 -->

<!-- START_f58213cd71dff813cecd421259a65e22 -->
## _ignition/styles/{style}
> Example request:

```bash
curl -X GET -G "http://api.sudotec.test/_ignition/styles/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/_ignition/styles/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _ignition/styles/{style}`


<!-- END_f58213cd71dff813cecd421259a65e22 -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST "http://api.sudotec.test/oauth/token" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/oauth/token");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
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
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://api.sudotec.test/oauth/tokens" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/oauth/tokens");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://api.sudotec.test/oauth/tokens/1" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/oauth/tokens/1");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
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
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_0ede357cfa17e8746504eb85c997884f -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://api.sudotec.test/api/auth/password/email" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/password/email");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
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
`POST api/auth/password/email`


<!-- END_0ede357cfa17e8746504eb85c997884f -->

<!-- START_b24783c060b90093f81dc015cbcd068f -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://api.sudotec.test/api/auth/password/reset" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/api/auth/password/reset");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
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
`POST api/auth/password/reset`


<!-- END_b24783c060b90093f81dc015cbcd068f -->

<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## api/user
> Example request:

```bash
curl -X GET -G "http://api.sudotec.test/api/user" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/api/user");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## api/users
> Example request:

```bash
curl -X GET -G "http://api.sudotec.test/api/users" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ"
```

```javascript
const url = new URL("http://api.sudotec.test/api/users");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->


