# Pizza Restaurant API

## Description

 An API for tracking pizza restaurants.

## Project Setup
Once you have the plan in place for the application you want to build take the following steps:

- Create a new Laravel project.
- Create a new GitHub repository.

## Technologies Used

1. Laravel
2. SQLite

## Project Guidelines
Your project should conform to the following set of guidelines:

### Models
You need to create the following relationships:

- A `Restaurant` has many `Pizza`s through `RestaurantPizza`

- A `Pizza` has many `Restaurants through `RestaurantPizza`

- A `RestaurantPizza` belongs to a `Restaurant` and belongs to a `Pizza`

Start by creating the models and migrations for the following database tables:

Add any code needed in the model files to establish the relationships. Then, run the migrations.

 You are welcome to generate your own seed data to test the application.

### Validations
Add validations to the `RestaurantPizza` model:

- must have a `price` between 1 and 30

### Routes
Set up the following routes. Make sure to return JSON data in the format

specified along with the appropriate HTTP verb.

1. GET /restaurants

Return JSON data in the format below:

```

[

  {

    "id": 1,

    "name": "Sottocasa NYC",

    "address": "298 Atlantic Ave, Brooklyn, NY 11201"

  },

  {

    "id": 2,

    "name": "PizzArte",

    "address": "69 W 55th St, New York, NY 10019"

  }

]

```


2. GET /restaurants/:id

If the `Restaurant` exists, return JSON data in the format below:

```

{

  "id": 1,

  "name": "Sottocasa NYC",

  "address": "298 Atlantic Ave, Brooklyn, NY 11201",

  "pizzas": [

    {

      "id": 1,

      "name": "Cheese",

      "ingredients": "Dough, Tomato Sauce, Cheese"

    },

    {

      "id": 2,

      "name": "Pepperoni",

      "ingredients": "Dough, Tomato Sauce, Cheese, Pepperoni"

    }

  ]

}

```

If the `Restaurant` does not exist, return the following JSON data, along with

the appropriate HTTP status code:

```

{

  "error": "Restaurant not found"

}

```


3. DELETE /restaurants/:id

If the `Restaurant` exists, it should be removed from the database, along with

any `RestaurantPizza`s that are associated with it (a `RestaurantPizza` belongs

to a `Restaurant`, so you need to delete the `RestaurantPizza`s before the

`Restaurant` can be deleted).

After deleting the `Restaurant`, return an _empty_ response body, along with the

appropriate HTTP status code.

If the `Restaurant` does not exist, return the following JSON data, along with

the appropriate HTTP status code:

```

{

  "error": "Restaurant not found"

}

```

 
4. GET /pizzas

Return JSON data in the format below:

```

[

  {

    "id": 1,

    "name": "Cheese",

    "ingredients": "Dough, Tomato Sauce, Cheese"

  },

  {

    "id": 2,

    "name": "Pepperoni",

    "ingredients": "Dough, Tomato Sauce, Cheese, Pepperoni"

  }

]

```

5. POST /restaurant_pizzas

This route should create a new `RestaurantPizza` that is associated with an

existing `Pizza` and `Restaurant`. It should accept an object with the following

properties in the body of the request:

```

{

  "price": 5,

  "pizza_id": 1,

  "restaurant_id": 3

}

```

If the `RestaurantPizza` is created successfully, send back a response with the data

related to the `Pizza`:

```

{

  "id": 1,

  "name": "Cheese",

  "ingredients": "Dough, Tomato Sauce, Cheese"

}

```

If the `RestaurantPizza` is **not** created successfully, return the following

JSON data, along with the appropriate HTTP status code:

```

{

  "errors": ["validation errors"]

}

```
