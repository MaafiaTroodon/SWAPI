# Lab 4 - Star Wars API

## Student Information

- **Name**: Malhar Datta Mahajan
- **Student ID**: B00934337
- **Date Created**: October 24, 2024

## Overview

This lab focuses on interacting with the Star Wars API (SWAPI) using PHP. The primary goals of this lab were to:

Retrieve data from the Star Wars API using the /people/ endpoint.
Display the retrieved data (character name, height, mass, and birth year) in a dynamic HTML table.
Implement search functionality to filter characters by name using user input.
By the end of this lab, I learned how to:

Make GET requests to an external API and handle the JSON response in PHP.
Display the API data on a web page using HTML and Bootstrap.
Implement basic search functionality to query the API based on user input.

## Tasks Completed

    Fetch Star Wars Characters: I successfully retrieved character data from the Star Wars API using PHP. The character details are displayed in a table, including fields like name, height, mass, and birth year.

    Display Data in a Table: Using a PHP loop (foreach), I dynamically populated an HTML table with the character data fetched from the API.

    Search Functionality: I implemented a search form that allows users to search for specific characters by name. This is done by sending a GET request to the /people/?search= endpoint of the SWAPI.

## Citations

- [Bootstrap](https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css)
- [SWAPI](https://swapi.dev/)
- [Google Fonts](https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap)


## Reflection

During this lab, I encountered an issue with using PHP for asynchronous requests, which is not feasible as PHP operates server-side. I adapted the lab by using file_get_contents() in PHP to retrieve data synchronously from the Star Wars API. Additionally, I practiced making asynchronous requests with the Fetch API in JavaScript to reinforce client-side interactions.

While the API data fetched successfully and displayed in the table, the search functionality required careful attention to handle edge cases like no results being found. I implemented a message to handle such cases.

This lab enhanced my understanding of API interactions and the flow of data between client-side and server-side scripting.