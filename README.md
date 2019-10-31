# plain-news
<img src="https://media.giphy.com/media/2yxkSUWYzgnsPje3X8/giphy.gif" width="100%">
First assignment in PHP

## Assignment instructions

The news feed will consist solely of a list of 10 news feed items created by 5 different authors. 

### The news feed items should contain:

- Title
- Content
- Author
- Published date
- Like counter (the number of likes a news feed item has received)


### The news feed author items should contain the following data:

- ID
- Full name

The news feed items should be ordered based on the published date, so the latest news feed item should go on top and vice versa.

### The project should use the following PHP functionality:

- Variables
- Multiple data types
- Arrays
- Functions
- Loops (for, while or foreach)
- Output (echo, print etc.)

## Installation instructions
- Clone down the project to you computer:
- $ git clone https://github.com/emeliepetersson/plain-news.git.
- Start your server.
- Open the index.php file in your browser.

## Extra
- Added functions to hide and show content/menu items with javascript.
- Added categories and return all unique categories with php function.
- Added a SQLite database and used PDO to connect to the database and fetch data. 
- Added javascript function to increment likes on click.

## Testers
- Julia Karlsson
- Camilla Kylmänen

## Code review
By Andreas Pandzic:
- You repeat your header code och foreach loop inside your article tags, in index.php, comics.php, podcast.php and movies.php.
- Try make one array by joining tables in your database query, instead of making two separate arrays for each table.
- You use inline styling in your img tags, this isn't consistent with your other css styling.

## License
See [The MIT License](https://github.com/emeliepetersson/plain-news/blob/master/LICENSE).
