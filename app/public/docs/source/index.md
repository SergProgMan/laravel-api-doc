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
        "id": 3,
        "user_name": "Marina Green",
        "deleted_at": null,
        "created_at": "2019-02-21 17:59:48",
        "updated_at": "2019-02-21 17:59:48"
    },
    {
        "id": 4,
        "user_name": "Sharon Bernier",
        "deleted_at": null,
        "created_at": "2019-02-21 17:59:48",
        "updated_at": "2019-02-21 17:59:48"
    },
    {
        "id": 5,
        "user_name": "Kristin Jakubowski V",
        "deleted_at": null,
        "created_at": "2019-02-21 17:59:48",
        "updated_at": "2019-02-21 17:59:48"
    },
    {
        "id": 6,
        "user_name": "Prof. Trinity Goyette I",
        "deleted_at": null,
        "created_at": "2019-02-21 18:00:37",
        "updated_at": "2019-02-21 18:00:37"
    },
    {
        "id": 7,
        "user_name": "Prof. Keaton Kuhic III",
        "deleted_at": null,
        "created_at": "2019-02-21 18:00:37",
        "updated_at": "2019-02-21 18:00:37"
    },
    {
        "id": 8,
        "user_name": "Dr. Mackenzie Ruecker",
        "deleted_at": null,
        "created_at": "2019-02-21 18:00:37",
        "updated_at": "2019-02-21 18:00:37"
    },
    {
        "id": 9,
        "user_name": "Ms. Irma Abbott",
        "deleted_at": null,
        "created_at": "2019-02-21 18:00:37",
        "updated_at": "2019-02-21 18:00:37"
    },
    {
        "id": 10,
        "user_name": "Mr. Delbert Runolfsdottir",
        "deleted_at": null,
        "created_at": "2019-02-21 18:00:37",
        "updated_at": "2019-02-21 18:00:37"
    },
    {
        "id": 11,
        "user_name": "Kenyon Torphy",
        "deleted_at": null,
        "created_at": "2019-02-21 18:07:31",
        "updated_at": "2019-02-21 18:07:31"
    },
    {
        "id": 12,
        "user_name": "Jalen Kerluke",
        "deleted_at": null,
        "created_at": "2019-02-21 18:07:31",
        "updated_at": "2019-02-21 18:07:31"
    },
    {
        "id": 13,
        "user_name": "Emma Becker",
        "deleted_at": null,
        "created_at": "2019-02-21 18:07:31",
        "updated_at": "2019-02-21 18:07:31"
    },
    {
        "id": 16,
        "user_name": "Roscoe Purdy",
        "deleted_at": null,
        "created_at": "2019-02-21 18:09:37",
        "updated_at": "2019-02-21 18:09:37"
    },
    {
        "id": 17,
        "user_name": "Kevon Skiles",
        "deleted_at": null,
        "created_at": "2019-02-21 18:09:37",
        "updated_at": "2019-02-21 18:09:37"
    },
    {
        "id": 18,
        "user_name": "Queenie Gerhold",
        "deleted_at": null,
        "created_at": "2019-02-21 18:09:37",
        "updated_at": "2019-02-21 18:09:37"
    },
    {
        "id": 19,
        "user_name": "Ms. Dasia Rau",
        "deleted_at": null,
        "created_at": "2019-02-21 18:09:37",
        "updated_at": "2019-02-21 18:09:37"
    },
    {
        "id": 20,
        "user_name": "Roxane Stokes",
        "deleted_at": null,
        "created_at": "2019-02-21 18:09:37",
        "updated_at": "2019-02-21 18:09:37"
    },
    {
        "id": 21,
        "user_name": "Dr. Omari Johnston DVM",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 22,
        "user_name": "Sonny Price",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 23,
        "user_name": "Alisa Beatty",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 24,
        "user_name": "Retta Price",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 25,
        "user_name": "Meaghan Larson",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 26,
        "user_name": "Pasquale Crist",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 27,
        "user_name": "Emilie Haley",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 28,
        "user_name": "Thomas Borer",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 29,
        "user_name": "Savion Nienow",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 30,
        "user_name": "Richard Prohaska",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 31,
        "user_name": "Mrs. Maudie Torphy MD",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 32,
        "user_name": "Prof. Andrew Anderson MD",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 33,
        "user_name": "Stella Gislason",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 34,
        "user_name": "Tony Anderson",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 35,
        "user_name": "Mr. Kennedi Walsh",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 36,
        "user_name": "Deonte Pfannerstill",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 37,
        "user_name": "Prof. Rico Hettinger",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 38,
        "user_name": "Dr. Teagan Dietrich Jr.",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 39,
        "user_name": "Mr. Adriel Thompson",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 40,
        "user_name": "Janessa Veum",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 41,
        "user_name": "Gia Champlin",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 42,
        "user_name": "Johnathan Wiegand",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 43,
        "user_name": "Prof. Jacquelyn Kertzmann",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 44,
        "user_name": "Chaz Robel",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 45,
        "user_name": "Harmon Johnston V",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 46,
        "user_name": "Mr. Isadore Jacobi I",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 47,
        "user_name": "Ursula Leffler",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 48,
        "user_name": "Joan Pfannerstill",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 49,
        "user_name": "Miss Ara McClure",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 50,
        "user_name": "Jude Kuvalis",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 51,
        "user_name": "Ava Bailey Sr.",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 52,
        "user_name": "Emerald Kling",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 53,
        "user_name": "Prof. Harvey Klein",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 54,
        "user_name": "Carlee Mueller",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 55,
        "user_name": "Ms. Sandy Larson",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 56,
        "user_name": "Dr. Shayne Feeney MD",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 57,
        "user_name": "Prof. Milford McClure V",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 58,
        "user_name": "Emiliano Will",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 59,
        "user_name": "Estelle Klein",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 60,
        "user_name": "Conner Ortiz",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 61,
        "user_name": "Malachi Mraz",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 62,
        "user_name": "Miss Ena Lindgren PhD",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 63,
        "user_name": "Prof. Randi Torp PhD",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 64,
        "user_name": "Prof. Melyna Franecki IV",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 65,
        "user_name": "Lyla Muller",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 66,
        "user_name": "Juston Feil DVM",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 67,
        "user_name": "Vern Cummerata",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 68,
        "user_name": "Else Wunsch III",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 69,
        "user_name": "Prof. Coby Walker",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 70,
        "user_name": "Dr. Landen Marvin II",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 71,
        "user_name": "Bette Hauck",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 72,
        "user_name": "Jewel Stamm",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 73,
        "user_name": "Chadd O'Hara",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 74,
        "user_name": "Arnoldo Toy",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 75,
        "user_name": "Savannah Sawayn",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 76,
        "user_name": "Leland Rempel",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 77,
        "user_name": "Dr. Liliane Fay I",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 78,
        "user_name": "Laurie Kiehn DVM",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 79,
        "user_name": "Dr. Lilian Pouros",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 80,
        "user_name": "Dr. Larry Rempel Sr.",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 81,
        "user_name": "Geovanni Treutel",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 82,
        "user_name": "Dr. Yasmin O'Reilly I",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 83,
        "user_name": "Emie Kuphal",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 84,
        "user_name": "Minerva Schneider",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 85,
        "user_name": "Miss Tara Schowalter",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 86,
        "user_name": "Blaze Klocko",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 87,
        "user_name": "Allen Wilkinson",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 88,
        "user_name": "Miss Luz Murphy",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 89,
        "user_name": "Ellis Dare",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 90,
        "user_name": "Claudie Witting",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 91,
        "user_name": "Austen Bashirian",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 92,
        "user_name": "Dustin Reynolds",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 93,
        "user_name": "Mellie Stark",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 94,
        "user_name": "Maria Bauch",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 95,
        "user_name": "Prof. Willa Harvey",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 96,
        "user_name": "Dr. Garnet Keeling",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 97,
        "user_name": "Brigitte Lubowitz",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 98,
        "user_name": "Kyleigh Beatty DVM",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 99,
        "user_name": "Mr. Zakary Flatley III",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 100,
        "user_name": "Buster Murphy II",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 101,
        "user_name": "Waylon Graham DDS",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 102,
        "user_name": "Elza Rutherford",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 103,
        "user_name": "Dr. Michele Toy DDS",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 104,
        "user_name": "Jennifer Walker",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 105,
        "user_name": "Parker Brown DVM",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 106,
        "user_name": "Richmond Jaskolski Sr.",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 107,
        "user_name": "Destinee Shields",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 108,
        "user_name": "Alexandro Monahan",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 109,
        "user_name": "Carlie Bergnaum",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 110,
        "user_name": "Ms. Kaylah Marquardt Sr.",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 111,
        "user_name": "Garland Keebler",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 112,
        "user_name": "Chauncey Rutherford",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 113,
        "user_name": "Ms. Cleta Spinka",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 114,
        "user_name": "Sydney Schinner",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 115,
        "user_name": "Pamela Dooley MD",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 116,
        "user_name": "Mary Olson",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 117,
        "user_name": "Prof. Mateo Labadie",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 118,
        "user_name": "Sunny Kuvalis",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 14,
        "user_name": "nPMpdzgbANMJVadv",
        "deleted_at": null,
        "created_at": "2019-02-21 18:07:31",
        "updated_at": "2019-02-22 06:14:31"
    },
    {
        "id": 1,
        "user_name": "nPMpdzgbANMJVadv",
        "deleted_at": null,
        "created_at": "2019-02-21 17:59:48",
        "updated_at": "2019-02-22 06:14:54"
    },
    {
        "id": 2,
        "user_name": "nPMpdzgbANMJVadv",
        "deleted_at": null,
        "created_at": "2019-02-21 17:59:48",
        "updated_at": "2019-02-22 06:17:05"
    },
    {
        "id": 119,
        "user_name": "Antonia Kerluke",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 120,
        "user_name": "Miss Ally Mueller",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 121,
        "user_name": "Mervin Kuhn",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 122,
        "user_name": "Mr. Quincy Mills V",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 123,
        "user_name": "Neoma Langosh PhD",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 124,
        "user_name": "Dr. Russel Brekke DVM",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 125,
        "user_name": "Daniella Pfannerstill",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 126,
        "user_name": "Prof. Simeon Feeney I",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 127,
        "user_name": "Kayley Kohler",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 128,
        "user_name": "Ms. Liana Feil",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 129,
        "user_name": "Nellie Dibbert",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 130,
        "user_name": "Lavina Boehm",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 131,
        "user_name": "Carlie Reichel PhD",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 132,
        "user_name": "Christelle Luettgen",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 133,
        "user_name": "Lily Gislason",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 134,
        "user_name": "Prof. Benton Crooks",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 135,
        "user_name": "Davonte Stamm",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 136,
        "user_name": "Orion Volkman",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 137,
        "user_name": "Mr. Jamey Abbott",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 138,
        "user_name": "Wilber Emmerich",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 139,
        "user_name": "Dr. Amparo Barrows",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 140,
        "user_name": "Enid Howell MD",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 141,
        "user_name": "Simone Anderson",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 142,
        "user_name": "Macy Hintz",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 143,
        "user_name": "Sharon Prohaska",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 144,
        "user_name": "Prof. Melyna Johnson",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 145,
        "user_name": "Tess Dooley II",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 146,
        "user_name": "Bret Keeling DDS",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 147,
        "user_name": "Wilma Boyle",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 148,
        "user_name": "Aliyah Bailey",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 149,
        "user_name": "Jacquelyn Shanahan",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 150,
        "user_name": "Dr. Evans Bins Sr.",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 151,
        "user_name": "Lucinda Wilderman DDS",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 152,
        "user_name": "Lewis Cassin",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 153,
        "user_name": "Dell Hirthe",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 154,
        "user_name": "Shakira Ratke",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 155,
        "user_name": "Bret Volkman",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 156,
        "user_name": "Dr. Camilla Ullrich",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 157,
        "user_name": "Dr. Lottie Roberts IV",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:27",
        "updated_at": "2019-02-21 18:10:27"
    },
    {
        "id": 158,
        "user_name": "Mrs. Amie Emard",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 159,
        "user_name": "Prof. Demetrius Marks",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 160,
        "user_name": "Nikita Thiel",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 161,
        "user_name": "Dr. Camilla O'Conner",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 162,
        "user_name": "Abel Ullrich",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 163,
        "user_name": "Prof. Hermina Klocko DVM",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 164,
        "user_name": "Marco Hackett",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 165,
        "user_name": "Virgil Hirthe",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 166,
        "user_name": "Eldora Gaylord",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 167,
        "user_name": "Sadye Ullrich",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 168,
        "user_name": "Norval Hayes",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 169,
        "user_name": "Hope Macejkovic",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 170,
        "user_name": "Alanis Aufderhar Jr.",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 171,
        "user_name": "Milton Kub",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 172,
        "user_name": "Rosa Graham",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 173,
        "user_name": "Darrell Stanton",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 174,
        "user_name": "Miss Oceane Bednar IV",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 175,
        "user_name": "Prof. Fritz West",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 176,
        "user_name": "Kristoffer Kihn",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 177,
        "user_name": "Ms. Colleen Sawayn DVM",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 178,
        "user_name": "Meagan Jast",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 179,
        "user_name": "Eliza Farrell",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 180,
        "user_name": "Mia Hettinger Jr.",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 181,
        "user_name": "Aleen Fay",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 182,
        "user_name": "William Kilback",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 183,
        "user_name": "Kaylee Dare DDS",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:28",
        "updated_at": "2019-02-21 18:10:28"
    },
    {
        "id": 15,
        "user_name": "nPMpdzgbANMJVadv",
        "deleted_at": null,
        "created_at": "2019-02-21 18:07:31",
        "updated_at": "2019-02-22 06:11:59"
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
    -d '{"user_name":"YRks7jucPstUrZGL"}'

```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_name": "YRks7jucPstUrZGL"
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
    -d '{"user_name":"IRHuI850ew7STJ8l"}'

```

```javascript
const url = new URL("http://localhost/api/user/{user}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_name": "IRHuI850ew7STJ8l"
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
    user_name | string |  required  | The name of the User.

<!-- END_a4a2abed1e8e8cad5e6a3282812fe3f3 -->

<!-- START_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->
## Remove the specified User from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/user/{user}" 
```

```javascript
const url = new URL("http://localhost/api/user/{user}");

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
`DELETE api/user/{user}`


<!-- END_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->

<!-- START_0b90bca1c4a67834a1c6873bc24f0412 -->
## Get the specified User&#039;s companies.

> Example request:

```bash
curl -X GET -G "http://localhost/api/user/{user}/companies" 
```

```javascript
const url = new URL("http://localhost/api/user/{user}/companies");

let headers = {
    "Accept": "application/json",
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
[]
```

### HTTP Request
`GET api/user/{user}/companies`


<!-- END_0b90bca1c4a67834a1c6873bc24f0412 -->

<!-- START_c6a2542e6f559a7fbbee119164fba6c4 -->
## Get a list of all Companies.

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
        "company_name": "qui dolor",
        "deleted_at": null,
        "created_at": "2019-02-21 18:00:37",
        "updated_at": "2019-02-21 18:00:37"
    },
    {
        "id": 2,
        "company_name": "mollitia voluptate",
        "deleted_at": null,
        "created_at": "2019-02-21 18:07:31",
        "updated_at": "2019-02-21 18:07:31"
    },
    {
        "id": 3,
        "company_name": "ut sint",
        "deleted_at": null,
        "created_at": "2019-02-21 18:09:37",
        "updated_at": "2019-02-21 18:09:37"
    },
    {
        "id": 4,
        "company_name": "ut id",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 5,
        "company_name": "dolores velit",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 6,
        "company_name": "et dolores",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 7,
        "company_name": "modi distinctio",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 8,
        "company_name": "a non",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 9,
        "company_name": "quidem sit",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 10,
        "company_name": "consectetur molestias",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 11,
        "company_name": "libero et",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 12,
        "company_name": "non qui",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 13,
        "company_name": "et voluptas",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 14,
        "company_name": "et aut",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 15,
        "company_name": "error laboriosam",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 16,
        "company_name": "voluptatem doloremque",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 17,
        "company_name": "expedita dolores",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 18,
        "company_name": "id ut",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 19,
        "company_name": "explicabo et",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 20,
        "company_name": "repellendus eius",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 21,
        "company_name": "dolorem voluptatem",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 22,
        "company_name": "odio odit",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 23,
        "company_name": "quas temporibus",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 24,
        "company_name": "ipsa perspiciatis",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 25,
        "company_name": "voluptates qui",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 26,
        "company_name": "aperiam temporibus",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 27,
        "company_name": "enim odit",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 28,
        "company_name": "quos minus",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 29,
        "company_name": "quas vitae",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 30,
        "company_name": "quo veniam",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 31,
        "company_name": "qui repellat",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 32,
        "company_name": "ut laborum",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 33,
        "company_name": "ab qui",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 34,
        "company_name": "delectus alias",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 35,
        "company_name": "eligendi in",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    },
    {
        "id": 36,
        "company_name": "voluptate eos",
        "deleted_at": null,
        "created_at": "2019-02-21 18:10:26",
        "updated_at": "2019-02-21 18:10:26"
    }
]
```

### HTTP Request
`GET api/company`


<!-- END_c6a2542e6f559a7fbbee119164fba6c4 -->

<!-- START_153d2119af6a72086ba88bc83d58b6b2 -->
## Store a newly created Company in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/company" \
    -H "Content-Type: application/json" \
    -d '{"company_name":"tkyiyXi7QQuSZbPk"}'

```

```javascript
const url = new URL("http://localhost/api/company");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "company_name": "tkyiyXi7QQuSZbPk"
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
## Update the specified Company in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/company/{company}" \
    -H "Content-Type: application/json" \
    -d '{"company_name":"6HQ0ELYtxvlKjc6y"}'

```

```javascript
const url = new URL("http://localhost/api/company/{company}");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "company_name": "6HQ0ELYtxvlKjc6y"
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
    company_name | string |  required  | The name of the Company.

<!-- END_2ecc0bb9bcbb89fc130ff0e2da45de7e -->

<!-- START_17894c0b6f5be7517e5738594a8a845f -->
## Remove the specified Company from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/company/{company}" 
```

```javascript
const url = new URL("http://localhost/api/company/{company}");

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
`DELETE api/company/{company}`


<!-- END_17894c0b6f5be7517e5738594a8a845f -->

<!-- START_bf957c7369e4ab218b20f67d248fb57a -->
## Get the specified Company&#039;s users.

> Example request:

```bash
curl -X GET -G "http://localhost/api/company/{company}/users" 
```

```javascript
const url = new URL("http://localhost/api/company/{company}/users");

let headers = {
    "Accept": "application/json",
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
[]
```

### HTTP Request
`GET api/company/{company}/users`


<!-- END_bf957c7369e4ab218b20f67d248fb57a -->


