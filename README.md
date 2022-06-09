JSON Link: [https://www.getpostman.com/collections/d008250622f3e4b0dee8](https://www.getpostman.com/collections/d008250622f3e4b0dee8)

------ Below is the index request ------
http://localhost:8000/api/users

Response:

{
    "code": 200,
    "message": "Success",
    "data": [
        {
            "id": 1,
            "name": "Zharkun",
            "email": "zharkun@hotmail.sg",
            "email_verified_at": null,
            "created_at": "2022-06-09T09:00:04.000000Z",
            "updated_at": "2022-06-09T16:23:29.000000Z"
        },
        {
            "id": 2,
            "name": "Huri",
            "email": "HuriKetam@gmail.com",
            "email_verified_at": null,
            "created_at": "2022-06-09T09:00:27.000000Z",
            "updated_at": "2022-06-09T09:00:27.000000Z"
        },
        {
            "id": 7,
            "name": "Kelapa",
            "email": "AirKelapa@Goreng.com",
            "email_verified_at": null,
            "created_at": "2022-06-09T09:35:42.000000Z",
            "updated_at": "2022-06-09T09:35:42.000000Z"
        },
        {
            "id": 11,
            "name": "Duck",
            "email": "Ducky@Channel.com",
            "email_verified_at": null,
            "created_at": "2022-06-09T09:36:27.000000Z",
            "updated_at": "2022-06-09T15:55:06.000000Z"
        },
        {
            "id": 12,
            "name": "Test",
            "email": "Test@gmail.com",
            "email_verified_at": null,
            "created_at": "2022-06-09T09:47:47.000000Z",
            "updated_at": "2022-06-09T09:47:47.000000Z"
        },
        {
            "id": 15,
            "name": "Hijz",
            "email": "Jizz@hotmail.com",
            "email_verified_at": null,
            "created_at": "2022-06-09T10:00:28.000000Z",
            "updated_at": "2022-06-09T10:00:28.000000Z"
        },
        {
            "id": 16,
            "name": "Arabica",
            "email": "Abc@dis.com",
            "email_verified_at": null,
            "created_at": "2022-06-09T10:26:58.000000Z",
            "updated_at": "2022-06-09T10:26:58.000000Z"
        },
        {
            "id": 17,
            "name": "Esprey",
            "email": "Gta@gmail.com",
            "email_verified_at": null,
            "created_at": "2022-06-09T10:31:27.000000Z",
            "updated_at": "2022-06-09T10:31:27.000000Z"
        }
    ]
}


------ Below is the register request (completed form) ------
http://localhost:8000/api/register?name=minion&email=DespicableMe@illumination.com&password=zhar123&password_confirm=zhar123

Response:

{
    "name": "Minion",
    "email": "DespicableMe@Illumination.com",
    "updated_at": "2022-06-09T18:08:28.000000Z",
    "created_at": "2022-06-09T18:08:28.000000Z",
    "id": 59
}


------ Below is the register request (incompleted/redundant form) ------
http://localhost:8000/api/register?name=minion&email=DespicableMe@illumination.com&password=zhar123&password_confirm=zhar123

Response:

{
    "message": "The data fill is required"
}


------ Below is the login request (completed form) ------
http://localhost:8000/api/login

Response:

{
    "user": {
        "id": 59,
        "name": "Minion",
        "email": "DespicableMe@Illumination.com",
        "email_verified_at": null,
        "created_at": "2022-06-09T18:08:28.000000Z",
        "updated_at": "2022-06-09T18:08:28.000000Z"
    },
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOWE4MmEyNjg0NjY1OGE3ZWYwNTFiZmIxNDMwMTExZDY4NjQ2ZTA5NWM3MTRhNjFkMGJmMDFiNTZkNmM0OGE1NzcxZDExODBmOTIxZDEyMDAiLCJpYXQiOjE2NTQ3OTgzODIuODAwOTMxLCJuYmYiOjE2NTQ3OTgzODIuODAwOTMzLCJleHAiOjE2ODYzMzQzODIuNzk2OTA5LCJzdWIiOiI1OSIsInNjb3BlcyI6W119.Ttu8tdaRMES3H9DsFC2mZTfHMAC5UKVv9_ujvX_KqSjbYGfIOSwIxa9uQYO6W1G8YUmETdCe1LrmzFh8Dnr0pqsLmWbriEl1cfRlvgcwOqCp_NBbjmdkNwB5nGGWCKVsDkmxl-erUaH8n_0CLqlJ4xuGakUTWbyu4zBsNZJnGhswp36r0xA1MdKpuiHIoJeAz3bupMiC9e-xsMr-NbdN8Zy2EejwRKU8kbgAPCUMGGg5BvwEhJBMQXc2QwLSaFwr0glTiMmiSUhKvidRb8dwUJHYf4r4xRmOisgjXGju6wOOPjGOkO-2hsYe4ceobRHYJ7RuYshuI0X9xtrsaRBl51hRA0_ql2t5f740y7rtZFhhRrujG7sAd4rqSJsk6ZXfzzOPdsREx_hRe31zypz7PDldGgQqOZhxfho5nj8B24IJvPsII15ZSIfmFjZ-nvkfRpYta71g6q6BD9dp6VmWQQVC_cqbqZfjI-xC3R2ByEe0o5tuiqSgUDDDSnViTeHZXCJH5-SpaO6rFvOhs4aZalfFT3m5cKL-UwnyUEuwAUGqbNhrzT9vnUeDEBnQWaDulkfE2_byP486S-d0-t4PrNuEqi_i5vU7sljwogOdoVvg6GGkUZaSqR9oeWQpVB7ePN3a9NimIar6_oxVoprtUzg0y_b7WRiYqa40NvE1oiI"
}


------ Below is the login request (completed form with inexist data) ------
http://localhost:8000/api/login

Response:

{
    "message": "This User does not exist"
}


------ Below is the login request (incomplete form) ------
http://localhost:8000/api/login

Response:

{
    "message": "The data fill is required"
}


------ Below is update request (completed form) ------
http://localhost:8000/api/user/update/1

Response:

{
    "code": 200,
    "message": "Update Successfully",
    "data": [
        {
            "id": 1,
            "name": "Zharkuna",
            "email": "zharkun@hotmail.sg",
            "email_verified_at": null,
            "created_at": "2022-06-09T09:00:04.000000Z",
            "updated_at": "2022-06-09T18:20:09.000000Z"
        }
    ]
}


------ Below is the update request (incompleted form) ------
http://localhost:8000/api/user/update/7

Response:

{
    "message": "The data fill is required"
}


------ Below is the delete request ------
http://localhost:8000/api/user/delete/7

Response:

{
    "code": 200,
    "message": "Success Deleted data",
    "data": null
}

------ Below is the csv file request ------
http://localhost:8000/api/files

Response:

{
    "message": "The data in excel successfully uploaded to database"
}
